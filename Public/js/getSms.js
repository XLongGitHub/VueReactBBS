let time = 60; //发送按钮禁止时间
//通过属性选择器取得元素
let phone = document.querySelector('input[name=phone]');
let phoneCheck = document.getElementById('phoneCheck');
let checkword = document.querySelector('input[name=checkword]');
let password = document.querySelector('input[name=password]');
let password2 = document.querySelector('input[name=password2]');
let passwordTip = document.querySelector('#passwordTip');
//未阻止默认事件时，时钟触发失败

phoneCheck.addEventListener('click', (evt) => {
    evt.preventDefault();
    phoneCheckFunc();
});

/**
 * 验证码获取函数
 * 通过Ajax，传递电话号码，向后台请求，又后台生成验证码，
 * 并通过第三方服务发送
 */
function phoneCheckFunc() {
    if (time === 60) {
        $.ajax({
            url: window.location,
            method: 'get',
            beforeSend : function (XMLHttpRequest) {
                XMLHttpRequest.setRequestHeader('request_type','ajax');
            },
            data: {
                phone: phone.value
            }
        }).done(() => {
            this.onClick = null; //移除事件处理
            window.timer1 = setInterval(() => {
                disbtn();
            }, 1000);
        });
    }
}
//计时函数
function disbtn() {
    if (time <= 0) {
        clearInterval(window.timer1);
        time = 60;
        phoneCheck.innerText = '获取验证码';
        phoneCheck.addEventListener('click', () => {
            phoneCheckFunc();
        });
    } else {
        phoneCheck.innerText = `剩余${  time--  }秒`;
    }
}


//chrome上失败
if (password.addEventListener) { 
    password.addEventListener('keyup', () => {
        checkPassword();
    });
    password2.addEventListener('keyup', () => {
        checkPassword();
    });
} else {

}

function checkPassword() {
    let pwd1 = trim(password.value); //密码
    let pwd2 = trim(password2.value); //确认密码
    let len1 = pwd1.length;
    let len2 = pwd2.length;

    if (len1 === 0 && len2 === 0) {

    } else if (len1 !== 0 && len2 === 0) {
        if (len1 < 6) {
            passwordTip.innerText = '你输入的密码太短';
        } else {
            passwordTip.innerText = '';
            // passwordTip.innerHTML = '';  // 使用innerHTML将span元素清掉了
        }
    } else if (len1 === 0 && len2 !== 0) {

    } else {
        if (len1 === len2) {
            if (pwd1 !== pwd2) {
                passwordTip.innerText = '两次输入的密码不同';
            } else {
                passwordTip.innerText = '';
                return;
            }
        } else {
            passwordTip.innerText = '两次输入的密码不同'; 
        }
    }
}
//去除字符串首末空格
function trim(str) {
    return str.replace(/^\s*/, '').replace(/\s*$/, '');
}

function formValidate() {
    if (trim(phone.value).length > 8 && 
        trim(phone.value).length <= 11 &&
        trim(checkword.value).length === 4 &&
        trim(password.value).length >= 6 &&
        trim(password.value) === trim(password2.value)
    ) {
        return true;
    } else {
        alert('form error');
        return false;
    }
}