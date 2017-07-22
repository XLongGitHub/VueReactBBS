let time = 60;  //发送按钮禁止时间
//通过属性选择器取得元素
let phone = document.querySelector('input[name=phone]');
let phoneCheck = document.getElementById('phoneCheck');
let checkword = document.querySelector('input[name=checkword]');
let password = document.querySelector('input[name=password]');
let password2 = document.querySelector('input[name=password2]');
//未阻止默认事件时，时钟触发失败
$('form').submit((evt) => {
    evt.preventDefault();
});

phoneCheck.addEventListener('click', () => {
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