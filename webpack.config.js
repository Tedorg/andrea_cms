const sass = require("node-sass");
const sassUtils = require("node-sass-utils")(sass);
const sassVars = require(__dirname + "/src/theme.js");
const path = require("path");
module.exports = {
  watch: true,
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
      use: [{
        loader: "style-loader",
      }, {
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
};
