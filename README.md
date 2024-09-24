# WARP+ Keys Collector

a simple tool that automatically collects 15 WARP+ Keys once every hour.<br>
一个简单的工具，每小时自动收集15个WARP+ Keys。

## Usage / 使用方法

* Lite Version / 精简版:
  * https://raw.githubusercontent.com/ircfspace/warpkey/main/plus/lite
* Full Version / 完整版:
  * https://raw.githubusercontent.com/ircfspace/warpkey/main/plus/full

## How it works / 工作原理

This tool fetches WARP+ keys from the following Telegram channels:
该工具从以下Telegram频道获取WARP+ Keys:
* warpplus
* warppluscn
* warpPlusHome
* warp_veyke

The keys are then saved to two files:
然后将Keys保存到两个文件中:
* `plus/lite` - contains 15 keys / 包含15个Keys
* `plus/full` - contains 100 keys / 包含100个Keys

## Setup / 设置

1. Clone the repository / 克隆仓库:
    ```sh
    git clone https://github.com/ircfspace/warpkey.git
    cd warpkey
    ```

2. Run the script manually / 手动运行脚本:
    ```sh
    php crawler.php
    ```

3. Set up GitHub Actions to run the script automatically every hour / 设置GitHub Actions每小时自动运行脚本.

4. Set up GitHub Secrets / 设置GitHub Secrets:
    - Go to your repository's settings / 进入仓库设置.
    - Add a new secret with the name `GITHUB_TOKEN` and your GitHub token as the value / 添加一个名为 `GITHUB_TOKEN` 的新secret，并将你的GitHub token作为值.

## Contributing / 贡献

Contributions are welcome! Please open an issue or submit a pull request.
欢迎贡献！请提交issue或pull request。

## License / 许可证

This project is licensed under the MIT License.
该项目使用MIT许可证。
