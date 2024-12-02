const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CopyPlugin = require('copy-webpack-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

module.exports = {
  entry: './src/assets/app.js', // Archivo principal de entrada
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'js/bundle.js', // Salida del archivo JS
  },
  module: {
    rules: [
      {
        test: /\.css$/i,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'postcss-loader',
        ],
      },
    ],
  },
  plugins: [
    new CleanWebpackPlugin(), // Limpia el directorio `dist` antes de cada compilación
    new MiniCssExtractPlugin({
      filename: 'css/styles.css', // Salida del CSS compilado
    }),
    new CopyPlugin({
      patterns: [
        {
          from: 'src/**/*.php', // Copia todos los archivos PHP
          to: '[name][ext]', // Respeta la estructura de carpetas
        },
        {
          from: 'src/menu.json', // Copia el archivo menu.json
          to: '[path][name][ext]', // Mantiene la ubicación relativa
        },
      ],
    }),
  ],
  watch: true, // Activa observación para cambios en los archivos
};
