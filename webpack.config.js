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
      {
        test: /\.php$/,
        type: 'asset/resource', // Maneja archivos PHP como recursos estáticos
      },
    ],
  },
  plugins: [
    new CleanWebpackPlugin(), // Limpia el directorio `dist` antes de cada compilación
    new MiniCssExtractPlugin({
      filename: 'assets/styles.css', // Salida del CSS compilado
    }),
    new CopyPlugin({
      patterns: [
        {
          from: 'src/**/*.php', // Copia todos los archivos PHP
          to: ({ context, absoluteFilename }) => {
            const relativePath = path.relative(context, absoluteFilename);
            return path.posix.join(...relativePath.split(path.sep)).replace('src/', ''); // Normaliza las rutas
          },
        },
        {
          from: 'src/menu.json', // Copia el archivo menu.json
          to: '[path][name][ext]', // Mantiene la ubicación relativa
        },
        {
          from: 'src/assets/img/**/*.{jpg,jpeg,png,gif,svg,webp}', // Copia todas las imágenes
          to: ({ context, absoluteFilename }) => {
            const relativePath = path.relative(context, absoluteFilename);
            return path.posix.join(...relativePath.split(path.sep)).replace('src/', ''); // Normaliza las rutas
          },
        },
        {
          from: 'src/assets/icons/*.svg', // Copia todas las imágenes
          to: 'assets/icons/[name][ext]', // Carpeta de destino en `dist`
        },
        {
          from: 'src/assets/docs/**/*.{doc,docx,pdf,xls}', // Copia todos los documentos
          to: 'assets/docs/[name][ext]', // Carpeta de destino en `dist`
        },
      ],
    }),
  ],
  watch: true, // Activa observación para cambios en los archivos
};