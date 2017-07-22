module.exports = {
    "env": {
        "browser": true,
        "es6": true,
        "node": true,
        "jquery": true,
    },
    "extends": "eslint:recommended",
    "parserOptions": {
        "ecmaFeatures": {
            "experimentalObjectRestSpread": true,
            "jsx": true
        },
        "sourceType": "module"
    },
    "plugins": [
        "react"
    ],
    "rules": {
        "indent": [ "error", 4 ],
        "linebreak-style": [ "error", "windows" ],
        // "quotes": [ "error", "double" ],
        "react/jsx-uses-react": "error",
        "react/jsx-uses-vars": "error",
        "no-var":1,
        // 'no-trailing-spaces': 'error', // 禁用行尾空格 
        'arrow-spacing': 'error', // 要求箭头函数的箭头之前和之后有空格 
        'semi': ['error', 'always'], //不得省略语句结束的分号 
        'camelcase': ['error', {properties: 'never'}], // 要求使用骆驼拼写法 
        'eqeqeq': 'error', // 使用 === 和 !== 代替 == 和 != 
        'no-useless-concat': 'error', // 禁止没有必要的字符拼接    
        'quotes': ['error', 'single'], // 字符串开头和结束使用单引号 
        'prefer-template': 'error', // 使用模板而非字符串连接 
        'no-extra-boolean-cast': 'error', // 禁止不必要的布尔类型转换 
        'no-new-wrappers': 'error', // 禁止通过 new 操作符使用 String、Number 和 Boolean 
    }
};