# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is **theme_302**, a Gnuboard5 (그누보드5) PHP theme for the "학교시설지킴이 (Schoolkeeper)" website. Gnuboard5 is a Korean open-source PHP CMS/BBS framework. This theme sits under `theme/theme_302/` within the broader Gnuboard5 installation.

Because Gnuboard5 defines constants like `_GNUBOARD_` and globals like `$g5`, `$member`, `$is_member`, `$is_admin`, and `$config` at the CMS level, **every PHP file in this theme must be loaded through Gnuboard5's bootstrap** — direct file access is blocked by `if (!defined('_GNUBOARD_')) exit;` guards at the top of most files.

## Page Rendering Pipeline

The theme renders pages through four sequential includes:

1. **`head.php`** — detects mobile/community/shop mode, then loads `head.sub.php` which enqueues all CSS (Bootstrap 3, Font Awesome, owl-carousel, flexslider, etc.) and ends by including `navigation.php`
2. **`navigation.php`** — top bar (SNS links, login/logout, search), sticky Bootstrap navbar with dynamic menus queried from `$g5['menu_table']`
3. **`index.php`** — main page content (YouTube slider, tab-based board widgets via `latest()`, gallery)
4. **`tail.php`** — includes `footer.php`, then enqueues all JS (jQuery, Bootstrap, slick, owl-carousel, custom scripts), ends with `tail.sub.php`

For mobile (`G5_IS_MOBILE === true`) the same files delegate to their counterparts in `mobile/`. When `G5_COMMUNITY_USE === false` (shop-only mode) they delegate to `shop/`.

## Key Files

| File | Purpose |
|---|---|
| `theme.config.php` | Theme-level constants (`G5_THEME_DEVICE`, `G5_COMMUNITY_USE`) and `$theme_config` array with all skin names and image dimensions |
| `SF.lib.php` | Theme helper functions: `menus()` / `menus_mobile()` render left sidebar nav by querying the menu table for the current page |
| `navigation.php` | Top bar + sticky navbar; reads menus dynamically from DB |
| `footer.php` | Footer with site name, address, social icons, scroll-to-top button |
| `css/custom.css` | Primary place for site-specific style overrides |
| `js/custom.js` | Primary place for site-specific JS; also controls sub-page breadcrumb backgrounds (~line 385) |
| `js/script.js` | Slider speed and main interactive behaviour |
| `_common.php` | Thin bootstrap shim — just `include_once('../../common.php')` to load Gnuboard5 |

## Skin System

The `skin/` directory mirrors Gnuboard5's skin architecture:

- `skin/board/` — board list/view/write skins
- `skin/latest/` — "최근게시물" (recent posts) skins used by `latest()` calls in `index.php`
- `skin/member/`, `skin/outlogin/`, `skin/qa/`, `skin/search/`, etc.
- `skin/shop/` — e-commerce skins
- `mobile/skin/` — mobile counterparts

Skin names configured in `theme.config.php` (e.g. `'cf_member_skin' => 'basic'`) must match a directory inside the appropriate `skin/` subtree.

## Important Globals (from Gnuboard5)

- `G5_THEME_URL` / `G5_THEME_PATH` — URL and filesystem path to this theme directory
- `G5_THEME_MOBILE_PATH` / `G5_THEME_SHOP_PATH` — paths to `mobile/` and `shop/` subdirectories
- `G5_BBS_URL`, `G5_BBS_PATH` — Gnuboard5 BBS endpoints
- `G5_URL` — site root URL
- `$g5['menu_table']` — DB table name for menus
- `latest($skin, $board_id, $rows, $subject_len)` — renders a "latest posts" widget using a skin from `skin/latest/`

## Customisation Points

- **Logo**: `navigation.php` line 110 — `img/schoolkeeper.jpeg`
- **YouTube slide**: `index.php` — `$yt_url` variable and `<iframe>` src attributes
- **Contact info**: `navigation.php` (top bar email/phone) and `footer.php`
- **SNS links**: `navigation.php` (top bar + mobile) and `footer.php`
- **Floating left SNS sidebar**: controlled by `css/socialfloating.css` + `js/jquery.socialfloating.js`; comment out both includes to disable
- **Sub-page breadcrumb backgrounds**: `js/custom.js` ~line 385
- **Shop product display counts/dimensions**: `theme.config.php` `$theme_config` array
