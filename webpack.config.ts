const path = require('path');

module.exports = [
  {
    entry: ".\\src\\main.ts",
    output: {
      filename: "bbb-downloader.min.js",
      library: "bbb",
      libraryExport: "default",
      path: path.resolve(__dirname, 'assets'),
    },
    resolve: {
      extensions: [".ts", ".tsx"],
    },
    module: {
      rules: [
        {
          test: /\.tsx?$/,
          use: "ts-loader",
        },
        {
          test: /\.s[ac]ss$/i,
          use: ["style-loader", "css-loader", "sass-loader"],
        },
      ],
    },
  },
];
