# WARP+ Keys Collector

a simple tool that automatically collects 15 WARP+ Keys once every hour.<br>
یک ابزار ساده که به‌طور خودکار هر یک‌ساعت یکبار ۱۵ عدد کلید وارپ‌پلاس را جمع‌آوری می‌کند.

## Usage

* Lite Version:
  * https://raw.githubusercontent.com/ircfspace/warpkey/main/plus/lite
* Full Version:
  * https://raw.githubusercontent.com/ircfspace/warpkey/main/plus/full

## How it works

This tool fetches WARP+ keys from the following Telegram channels:
* warpplus
* warppluscn
* warpPlusHome
* warp_veyke

The keys are then saved to two files:
* `plus/lite` - contains 15 keys
* `plus/full` - contains 100 keys

## Setup

1. Clone the repository:
    ```sh
    git clone https://github.com/ircfspace/warpkey.git
    cd warpkey
    ```

2. Run the script manually:
    ```sh
    php crawler.php
    ```

3. Set up GitHub Actions to run the script automatically every hour.

4. Set up GitHub Secrets:
    - Go to your repository's settings.
    - Add a new secret with the name `GITHUB_TOKEN` and your GitHub token as the value.

## Contributing

Contributions are welcome! Please open an issue or submit a pull request.

## License

This project is licensed under the MIT License.
