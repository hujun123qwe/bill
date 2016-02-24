/**
 * Created by Lemon on 2016/2/24.
 */
$('#myTabs a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
})