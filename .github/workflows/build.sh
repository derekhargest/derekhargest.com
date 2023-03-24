name: CI/CD Pipeline

on:
  push:
    branches:
      - main

jobs:
  build_and_deploy:
    runs-on: ubuntu-latest

    steps:
    - name: Checkout repository
      uses: actions/checkout@v2

    - name: Build Dependencies
      run: |
          chmod +x .github/workflows/build.sh
          .github/workflows/build.sh

    - name: Install sshpass
      run: sudo apt-get install -y sshpass

    - name: Deploy to Raspberry Pi
      run: |
        sshpass -p ${{ secrets.RASPBERRY_PI_PASSWORD }} rsync -avz --delete --progress ./ ${{
          secrets.RASPBERRY_PI_USERNAME }}@${{ secrets.RASPBERRY_PI_HOST }}:/var/www/wp-content/themes/groundlevel/
