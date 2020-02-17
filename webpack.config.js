const path = require("path");

module.exports = {
    resolve: {
        alias: {
            "~": path.resolve(__dirname, "resources/assets/js"),
            "@sass": path.resolve(__dirname, "resources/assets/sass"),
            "@js": path.resolve(__dirname, "resources/assets/js")
        }
    }
};
  