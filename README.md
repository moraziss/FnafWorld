# FnafWorld

A static fan site for the *Five Nights at Freddy's* franchise, styled with Tailwind CSS and a retro "Press Start 2P" font.

## Pages

| Page | Description |
| --- | --- |
| `index.html` | Landing page with navigation |
| `pizzeria.html`, `pizzeria1-8.html`, `pizzeriaSB.html` | Pizzeria and location overviews |
| `lor.html` + `lor.js` | Lore as a small visual novel |
| `game.html` + `game.js` | Canvas-based mini game |
| `game2.html` | Second mini game |
| `contact.html` + `submit_form.php` | Contact form (the PHP script sends the message by e-mail, so it needs a PHP-enabled host) |

## Running locally

No build step is required for the pages themselves: Tailwind is loaded from the CDN.

```bash
python -m http.server 8000
# open http://localhost:8000
```

The contact form only works when served through PHP (`php -S localhost:8000`). Set the recipient address via the `CONTACT_EMAIL` environment variable.

`package.json` lists `tailwindcss` as a dev dependency together with `tailwind.config.js`, in case you want to move from the CDN to a compiled stylesheet.

## Notes

The site is an unofficial fan project. All characters belong to Scott Cawthon / Steel Wool Studios.
