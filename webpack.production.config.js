const sass = require("node-sass");
const sassUtils = require("node-sass-utils")(sass);
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const sassVars = require(__dirname + "/src/theme.js");
const path = require("path");
module.exports = {
  mode: 'production',
  devtool: 'source-map',
  watch: false,
  entry: "./src/index.js",
  output: {
    filename: "main.js",
    path: path.resolve(__dirname, "dist"),
  },
  module: {
    rules: [{
      test: /\.js$/,
      exclude: /node_modules/,
      use: {
        loader: "babel-loader",
        options: {
          presets: ["@babel/preset-env"],
        },
      },
    }, {
      test: /\.scss$/,
      use: [{loader: MiniCssExtractPlugin.loader,
        options: {
          publicPath: '/dist/',
        }, },{
        loader: "css-loader",
      }, {
        loader: "sass-loader",
        options: {
          functions: {
            "get($keys)": function(keys) {
              keys = keys.getValue().split(".");
              let result = sassVars;
              let i;
              for (i = 0; i < keys.length; i++) {
                result = result[keys[i]];
              }
              result = sassUtils.castToSass(result);
              return result;
            }
          }
        }
      }],
    }],
  },
  plugins: [
    new MiniCssExtractPlugin({
      // Options similar to the same options in webpackOptions.output
      // both options are optional
      filename: "[name].css",
      chunkFilename: "[id].css",
    }),
  ],
};
