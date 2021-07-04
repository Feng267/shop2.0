//修改密码
let verification = 0;// 密码验证是否通过
var number = 0;
var name = new Array();
function next_step() {

    var x = document.getElementById("old_ps").value;
    $.ajax({
        async: false,
        type: "post", //以post方式传输数据
        url: "api/user/pass_verify.php",//数据目的地和值
        data: {
            password: x
        },
        dataType: 'json',
        success: function (data) {
            verification = parseInt(data.status);
        }
    });

    var content =
        "<div class='layui-form-item' id='new_password'>"
        + "<label class='layui-form-label'>" + "新密码" + "</label>"
        + "<div class='layui-input-block'>"
        + "<input type='password' id='new_ps' name='new_ps' lay-verify='title' autocomplete='off' placeholder='请输入新密码' class='layui-input'>"
        + "</div>"
        + "</div>"
        + "<button type='button' id='button1' name='button1' class='layui-btn' lay-submit='' onclick='modify()'>" + "修改" + "</button>"
    if (x == '')
        layer.msg('请输入原密码！', { icon: 2, time: 1000, shade: [0.6, '#000', true] });
    else
        if (verification != 1)
            layer.msg('密码错误！', { icon: 2, time: 1000, shade: [0.6, '#000', true] });
        else {
            $("#old_password").remove();
            $("#button").remove();
            $("#right_frame").append(content);
        }
}

function modify() {

    var k = document.getElementById("new_ps");
    var x = k.value;
    var l = x.length;
    if (x == '') {
        layer.msg('请输入新密码！', { icon: 2, time: 1000, shade: [0.6, '#000', true] });
        k.focus();
    }
    else
        if (l < 6) {
            layer.msg('密码不能小于六位！', { icon: 7, time: 1000, shade: [0.6, '#000', true] });
            k.focus();
        }
        else {
            $.ajax({
                async: false,
                type: "post", //以post方式传输数据
                url: "api/user/password.php",//数据目的地和值
                data: { password: x },
                dataType: 'text',
                success: function (data) {
                    console.log(data);
                }
            });
            layer.msg('修改成功！', { icon: 1, time: 1500, shade: [0.6, '#000', true] });
            setTimeout(function () {
                window.location.href = "login.php";
            }, 1500);
        }

}