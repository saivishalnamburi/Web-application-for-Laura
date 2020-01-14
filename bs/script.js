$("#c1s1,#c2s1,#c3s1,#c4s1,#c5s1").change(function () {
        var a = parseFloat($("#c1s1").val());
        var b = parseFloat($("#c2s1").val());
        var c = parseFloat($("#c3s1").val());
        var d = parseFloat($("#c4s1").val());
        var e = parseFloat($("#c5s1").val());
        var total = a + b + c + d + e;
        $("#output1").text(total).fadeIn();
});
$("#c1s2,#c2s2,#c3s2,#c4s2,#c5s2").change(function () {
        var a = parseFloat($("#c1s2").val());
        var b = parseFloat($("#c2s2").val());
        var c = parseFloat($("#c3s2").val());
        var d = parseFloat($("#c4s2").val());
        var e = parseFloat($("#c5s2").val());
        var total = a + b + c + d + e;
        $("#output2").text(total).fadeIn();
});
$("#c1s3,#c2s3,#c3s3,#c4s3,#c5s3").change(function () {
        var a = parseFloat($("#c1s3").val());
        var b = parseFloat($("#c2s3").val());
        var c = parseFloat($("#c3s3").val());
        var d = parseFloat($("#c4s3").val());
        var e = parseFloat($("#c5s3").val());
        var total = a + b + c + d + e;
        $("#output3").text(total).fadeIn();
});
$("#c1s4,#c2s4,#c3s4,#c4s4,#c5s4").change(function () {
        var a = parseFloat($("#c1s4").val());
        var b = parseFloat($("#c2s4").val());
        var c = parseFloat($("#c3s4").val());
        var d = parseFloat($("#c4s4").val());
        var e = parseFloat($("#c5s4").val());
        var total = a + b + c + d + e;
        $("#output4").text(total).fadeIn();
});