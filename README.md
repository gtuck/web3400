# web3400 Dev Container

PHP + MariaDB development environment with phpMyAdmin and Composer preinstalled.

## Prerequisites

- **Local:** Visual Studio Code and Docker Desktop
- **Or:** nothing — launch it in GitHub Codespaces from your browser

## Getting started

1. Use this template to create your own repository, then clone it (or open it in Codespaces).
2. Open the folder in VS Code. When prompted, choose **Reopen in Container** and wait for the build to finish (first build takes a few minutes).

## Running your PHP server

You start the server yourself, from the folder you are working in:

```bash
# Assignments — run from inside your assignment folder:
php -S 0.0.0.0:8000

# Projects (MVC) — run from the project root; "public" is the web root:
php -S 0.0.0.0:8000 -t public
```

Then open port **8000** from the VS Code **Ports** panel (labeled "Your PHP server").
Press `Ctrl+C` in the terminal to stop the server before starting it from a different folder.

**"Address already in use"?** A server is already running in another terminal.
Stop it with `Ctrl+C` there, or find and stop it with `pkill -f "php -S"`.

## Database

| Setting  | Value       |
|----------|-------------|
| Host     | `127.0.0.1` |
| Port     | `3306`      |
| Database | `web3400`   |
| User     | `web3400`   |
| Password | `password`  |
| Root password | `password` |

Use `127.0.0.1` as the host in your PHP code — not `localhost` and not `db`.
(The app container shares the database container's network.)

```php
$pdo = new PDO('mysql:host=127.0.0.1;dbname=web3400;charset=utf8mb4', 'web3400', 'password');
```

These credentials are for local development only — never reuse them on a real server.

## phpMyAdmin

- **Local Docker:** http://localhost:8080
- **Codespaces:** open the port labeled **phpMyAdmin** in the Ports panel

Log in with the database credentials above (user `web3400` or `root`).

## Folders

- `assignments/` — your assignments
- `projects/` — your projects
- `.devcontainer/db-init/` — `.sql` files here run once when the database is first created

## Troubleshooting

- **Reset the database:** delete the `mariadb-data` Docker volume, then rebuild the container. All data is lost and `db-init` scripts re-run.
- **Rebuild the environment:** Command Palette → **Dev Containers: Rebuild Container**.
- **Check PHP works:** run `php -v` in the terminal, or serve `info.php` from the repo root.
