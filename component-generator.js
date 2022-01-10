require("dotenv").config();

const fs = require("fs");
const path = require("path");

class PrepareProject {
  // Define `apply` as its prototype method which is supplied with compiler as its argument
  apply(compiler) {
    // Specify the event hook to attach to
    compiler.hooks.afterEmit.tap("AfterEmitPlugin", (compilation) => {
      // prepare php
      let phpContent = fs.readFileSync(path.resolve(compiler.context, "src/component.txt"), "utf8");
      phpContent = phpContent.replace(/process\.env\.UUID/gmu, process.env.UUID);
      phpContent = phpContent.replace(/process\.env\.COMPONENT_NAME/gmu, process.env.COMPONENT_NAME);
      phpContent = phpContent.replace(/process\.env\.DESCRIPTION/gmu, process.env.DESCRIPTION);
      phpContent = phpContent.replace(/process\.env\.TYPE/gmu, process.env.TYPE);
      // create js folder
      fs.mkdirSync(
        path.resolve(compiler.context, process.env.JS_PATH, process.env.TYPE),
        { recursive: true }
      );
      // create css folder
      fs.mkdirSync(
        path.resolve(compiler.context, process.env.CSS_PATH, process.env.TYPE),
        { recursive: true }
      );
      // create folder storing php
      fs.mkdirSync(
        path.resolve(compiler.context, process.env.PHP_PATH, process.env.TYPE),
        { recursive: true }
      );
      // create folder storing blade
      fs.mkdirSync(
        path.resolve(
          compiler.context,
          process.env.BLADE_PATH,
          process.env.TYPE
        ),
        { recursive: true }
      );
      // copy js
      fs.copyFileSync(
        path.resolve(compiler.context, "src/index.tsx"),
        path.resolve(
          compiler.context,
          process.env.JS_PATH,
          process.env.TYPE,
          `${process.env.UUID}.tsx`
        )
      );
      // copy css
      fs.copyFileSync(
        path.resolve(compiler.context, "src/index.scss"),
        path.resolve(
          compiler.context,
          process.env.CSS_PATH,
          process.env.TYPE,
          `${process.env.UUID}.scss`
        )
      );
      // copy blade
      fs.copyFileSync(
          path.resolve(compiler.context, "src/index.blade.php"),
          path.resolve(
              compiler.context,
              process.env.BLADE_PATH,
              process.env.TYPE,
              `${process.env.UUID}.blade.php`
          )
      )
      // generate php
      fs.writeFileSync(
        path.resolve(
          compiler.context,
          process.env.PHP_PATH,
          process.env.TYPE,
          `${process.env.UUID}.php`
        ),
        phpContent
      );
    });
  }
}

module.exports = PrepareProject;