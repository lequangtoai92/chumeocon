@extends('master')
@section('content')
<style>
#crazy_english {
    border-collapse: collapse;
    width: 100%;
}

#crazy_english td,
#crazy_english th {
    border: 1px solid #ddd;
    padding: 8px;
}

#crazy_english tr:nth-child(even) {
    background-color: #f2f2f2;
}

#crazy_english tr:hover {
    background-color: #ddd;
}

.list-news audio {
    margin-top: 7px;
}
</style>
<section class="wrapper category-page">
    <div class="container media container_page">
        <div class="media-body">
            <div class="menu-day crazy-english">
                <select class="day">
                    @for ($i = 1; $i < 22; $i++) <option value="day{{$i}}">Ngày {{$i}}</option>
                        @endfor
                </select>
            </div>
            <div class="list-news">
                <div class="new-items day1">
                    <audio controls>
                        <source src="/uploads/21day_english/day1/day1.mp3" type="audio/mpeg">
                    </audio>
                    <table id="crazy_english" class="table table-striped table-hover">
                        <tbody>
                            <tr class="td-hover">
                                <td class="td-1" title="">1.Absolutely.</td>
                                <td class="td-2" title="">(Dùng để trả lời ) Đúng thế , vậy đó, đương nhiên rồi , chắc
                                    là vậy rồi .</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">2.Absolutely impossi ble!</td>
                                <td class="td-2" title="">Không thể nào! Tuyệt đối không có khả năng đó .</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">3.All I have to do is learn English.</td>
                                <td class="td-2" title="">Tất cả những gì tôi cần làm là học tiếng Anh.</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">4.Are you free tomorrow? </td>
                                <td class="td-2" title="">Ngày mai cậu rảnh không?</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">5.Are you married?</td>
                                <td class="td-2" title="">Bạn đã lập gia đình chưa?</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">6.Are you used to the food here?</td>
                                <td class="td-2" title="">Bạn ăn có quen đồ ăn ở đây không ?</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">7.Be careful.</td>
                                <td class="td-2" title="">Cẩn thận/ chú ý</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">8.Be my guest</td>
                                <td class="td-2" title="">Cứ tự nhiên / đừng khách sáo !</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">9.Better late than never.</td>
                                <td class="td-2" title="">Đến muộn còn tốt hơn là không đến .</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">10.Better luck next time.</td>
                                <td class="td-2" title="">Chúc cậu may mắn lần sau.</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">11.Better safe than sorry.</td>
                                <td class="td-2" title="">Cẩn thận sẽ không xảy ra sai sót lớn </td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">12.Can I have a day off?</td>
                                <td class="td-2" title="">Tôi có thể xin nghỉ một ngày được không?</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">13.Can I help?</td>
                                <td class="td-2" title="">Cần tôi giúp không ?</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="new-items day2 hide">
                    <audio controls>
                        <source src="/uploads/21day_english/day2/day2.mp3" type="audio/mpeg">
                    </audio>
                    <table id="crazy_english" class="table table-striped table-hover">
                        <tbody>
                            <tr class="td-hover">
                                <td class="td-1" title="">14.Can I take a message?</td>
                                <td class="td-2" title="">Có cần tôi chuyển lời không ?</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">15.Can I take a rain check?</td>
                                <td class="td-2" title="">Cậu có thể mời mình bữa khác được không?</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">16.Can I take your order?</td>
                                <td class="td-2" title="">Ông muốn chọn món không ?</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">17.Can you give me a wake-up cal l?</td>
                                <td class="td-2" title="">Cậu có thể gọi điện đánh thức mình dậy không?</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">18.Can you give me some feedback?</td>
                                <td class="td-2" title="">Anh có thể nêu một vài đề nghị cho tôi được không? </td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">19.Can you make it？ </td>
                                <td class="td-2" title="">Cậu có thể tới được không?</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">20.Can I have a word with yo u?</td>
                                <td class="td-2" title="">Tôi có thể nói chuyện với anh một lát được không?</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">21.Cath me later.</td>
                                <td class="td-2" title="">Lát nữa đến tìm tôi nhé !</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">22.Cheer up!</td>
                                <td class="td-2" title="">Vui vẻ lên nào/ Phấn khởi lên nào !</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">23.Come in and make yourself at home</td>
                                <td class="td-2" title="">Xin mời vào, đừng khách sáo !</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">24.Could I have the bill, please?</td>
                                <td class="td-2" title="">Xin cho xem hóa đơn tính tiền ?</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">25.Could you drop me off at the airport?</td>
                                <td class="td-2" title="">Cậu có thể chở mình đến sân bay được không?</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">26.Could you speak slower?</td>
                                <td class="td-2" title="">Anh nói chậm lại một chút được không?</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">27.Could you take a picture for me?</td>
                                <td class="td-2" title="">Có thể chụp hình giúp tôi không ?</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">28.Did you enjoy your flight?</td>
                                <td class="td-2" title="">Chuyến bay của ông vui vẻ chứ ?</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">29.Did you have a good day,today?</td>
                                <td class="td-2" title="">Hôm nay vui vẻ không?</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">30.Did you have a nice holiday?</td>
                                <td class="td-2" title="">Kì nghỉ của cậu vui vẻ chứ?</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">31.Did you have fun？</td>
                                <td class="td-2" title="">Cậu chơi vui vẻ chứ?</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">32.Dinner is on me</td>
                                <td class="td-2" title="">Bữa tối tôi mời.</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">33.Do you have a room ava ilable?</td>
                                <td class="td-2" title="">Chỗ các ông còn phòng trống không?</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">34.Do you have any hobbies? </td>
                                <td class="td-2" title="">Anh có sở thích gì không?</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">35.Do you have some change ? </td>
                                <td class="td-2" title="">Cậu có tiền lẻ không?</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">36. Do you mind my s moking?</td>
                                <td class="td-2" title="">Tôi hút thuốc có phiền gì không ạ ?</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">37.Do you often work out？</td>
                                <td class="td-2" title="">Anh thường xuyên rèn luyện thân thể chứ ?</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">38.Do you speak English?</td>
                                <td class="td-2" title="">Cậu biết nói tiếng Anh không?</td>
                            </tr>
                            <tr class="td-hover">
                                <td class="td-1" title="">39.Don't be so modest.</td>
                                <td class="td-2" title="">Đừng khiêm tốn thế .</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{!! assetRemote('js/crazy_english.js') !!}"></script>
@endsection