<!--Custom Template SweatAlert-->
<template id="alert-message-template">
    <swal-title></swal-title>
    <swal-html>Nội dung</swal-html>
    <swal-button type="confirm" class="ci-button">
        Đồng ý
    </swal-button>
    <swal-button type="cancel">
        Huỷ
    </swal-button>
    <swal-button type="deny">
        Không đồng ý
    </swal-button>
    <swal-param name="allowEscapeKey" value="false" />
    <swal-param name="customClass" value='{ "popup": "my-popup" }' />
</template>
<!--END - Custom Template SweatAlert-->

<!--Dialog Đồng ý-->
<div id="dialog-content" class="d-none">
    <div>
        Cảm ơn Bạn đã đăng kí là thành viên của <b>Ô Xanh</b>.
        Chúng tôi đã gửi bạn thông tin kích hoạt tài khoản vào địa chỉ email
        <a href="mailto:abc@gmail.com">abc.xyz@gmail.com</a>. Bạn hãy kiểm tra hộp
        thư
        đến
        để thực hiện
        kích hoạt tài khoản!</p>
    </div>
</div>
<!--END - Dialog Đồng ý-->


<!-- Modal Tôi đồng ý -->
<div id="toi-dong-y" class="fancybox-modal fancybox-content-md">
    <div class="fancybox-header">
        <div class="fancybox-title text-center">
            Tôi đồng ý
        </div>
    </div>
    <div class="fancybox-body">
        <div class="mb-4">
            <label class="checkcontainer" for="ckb1">
                <input id="ckb1" type="checkbox" checked="checked">
                <span class="checkmark" style="top: 3px;"></span>
                <div>
                    Tôi là công dẫn Việt Nam, đang sinh sống tại Việt Nam.
                </div>
            </label>
        </div>
        <div>
            <label class="checkcontainer mb-0" for="ckb4">
                <input id="ckb4" type="checkbox" checked="checked">
                <span class="checkmark" style="top: 3px;"></span>
                <div>
                    Tôi đồng ý tham gia <span class="fw-medium">Nền tảng</span> trợ giúp lẫn nhau Ô Xanh qua giao dịch điện tử với công ty Công nghệ Internet chiếc Ô Xanh;
                    đã đọc hiểu và đồng ý với các <a href="javascript:void(0);">Điều khoản điều kiện, Quy ước, Quy tắc và Điều khoản bảo mật</a> của Ô Xanh.

                </div>
            </label>
        </div>
    </div>
    <div class="fancybox-footer">
        <div class="d-flex justify-content-center">
            <a href="javascript:void(0);" class="btn ci-btn ci-btn-200 ci-btn-outline mx-2 mx-lg-4" data-fancybox-close>Không</a>
            <a href="javascript:void(0);" class="btn ci-btn ci-btn-200 ci-bg-sub-color mx-2 mx-lg-4" onclick="fancybox_new_modal('#thong-tin-suc-khoe')">Xác nhận</a>
        </div>
    </div>
</div>
<!--End - Modal Tôi đồng ý -->

<!-- Modal Thông tin sức khoẻ -->
<div id="thong-tin-suc-khoe" class="fancybox-modal fancybox-content-lg">
    <div class="fancybox-header">
        <div class="fancybox-title text-center">
            Yêu cầu sức khoẻ <br>của kế hoạch hỗ trợ lần nhau của Ô Xanh
        </div>
    </div>
    <div class="fancybox-body text-justify">
        <div class="mb-4 fw-medium">
            Tôi cam kết rằng sức khỏe của tôi đáp ứng các yêu cầu sức khỏe sau đây và hiểu rằng việc không đáp ứng các điều kiện sau đây sẽ dẫn đến việc tự động rút khỏi kế hoạch tương trợ và không được hỗ trợ lẫn nhau và số tiền đã phân bổ sẽ không được hoàn lại:
        </div>

        <div class="mb-4">
            <p><b>1.&nbsp;Thể nhân&nbsp;dự định tham gia&nbsp;Chương trình tương trợ hỗ trợ&nbsp;bệnh hiểm nghèo&nbsp;của&nbsp;Ô Xanh&nbsp;không có các hành vi điều trị y tế sau đây:</b></p>

            <p>a) Hai năm trở lại đây phải uống thuốc trên 30 ngày liên tục hoặc nằm viện trên 15 ngày liên tục do ốm đau, điều trị, phẫu thuật hoặc nhập viện điều trị nhiều hơn 5 ngày &nbsp;trong vòng 06 tháng gần đây.</p>

            <p>b) Đang nằm viện hoặc được bác sĩ đề nghị nhập viện.</p>

        </div>

        <div class="mb-4">
            <p><b>2.&nbsp;Thể nhân&nbsp;dự định tham gia&nbsp;Chương trình Tương trợ Ô Xanh&nbsp;cho&nbsp;Bệnh&nbsp;hiểm nghèo không có các bệnh hoặc triệu chứng trước đây và hiện tại như sau:</b></p>

            <p>a. Các khối u ác tính, bệnh Hodgkin, ung thư hạch, ung thư biểu mô tại chỗ, u tân sinh trong biểu mô, u não và tủy sống.</p>

            <p>b) Không được chẩn đoán rõ ràng là lành tính: nốt phổi, nốt hoặc khối ở vú, nốt tuyến giáp, nốt hoặc khối ở gan, nốt bàng quang và hệ thống tiết niệu, polyp dạ dày, khối hoặc polyp ruột.</p>

            <p>c) Nhồi máu não, xuất huyết não, bệnh tim (bao gồm rối loạn nhịp tim, đau tim, đau ngực, dị tật tim bẩm sinh hoặc phẫu thuật tim), tăng huyết áp độ 2 trở lên (không dùng thuốc, huyết áp tâm thu ≥160mmHg hoặc huyết áp tâm trương ≥100mmHg), đái tháo đường.</p>

            <p>d. Viêm gan (kể cả người mang vi rút viêm gan), xơ gan, bệnh thận đa nang, suy thận.</p>

            <p>e. Thiếu máu bất sản, lupus ban đỏ hệ thống, viêm khớp dạng thấp, bệnh phổi tắc nghẽn mãn tính, bệnh Parkinson, động kinh, rối loạn tâm thần, liệt, AIDS, mang HIV.</p>

            <p>f) R<b>ối loạn lipid máu từ độ IIb trở lên theo mô hình Lipoprotein</b> hoặc &nbsp;tê liệt, liệt, mất cảm giác, co giật, ngất xỉu, bất kỳ hình thức vô cảm với cơn đau nào, đột quỵ, chấn thương não, rối loạn hệ thống thần kinh trung ương, bệnh Alzheimer, mất trí nhớ hoặc bại não, bệnh và chứng rối loạn của tim hay mạch máu, bệnh tâm thần, trầm cảm, lo lắng hoặc suy nhược thần kinh, rối loạn hô hấp, bệnh rối loạn của tai, đau lưng hoặc cổ liên tục trên 6 tuần, &nbsp;suy &nbsp;tuyến giáp, suy gan, suy thận.</p>

            <p>g) Trong 6 tháng gần đây, số cân nặng bị sụt giảm do không tập luyện thể dục thể thao là hơn 5 kg.</p>

        </div>

        <div class="mb-4">
            <p><b>3.&nbsp;Các yêu cầu bổ sung đối với thể nhân nữ (14 tuổi trở lên)&nbsp;có ý định tham gia&nbsp;Chương trình Tương trợ Ô Xanh&nbsp;cho các&nbsp;bệnh hiểm nghèo&nbsp;:</b></p>

            <p>Hiện không có các bệnh sau: chảy máu âm đạo không đều, viêm cổ tử cung nặng, khám TCT bất thường (loại trừ viêm nhiễm), dương tính với HPV; chưa được chẩn đoán là lành tính: u nang buồng trứng, polyp nội mạc tử cung.</p>

        </div>

        <div class="">
            <p><b>4.&nbsp;Các yêu cầu bổ sung đối với thể nhân từ hai tuổi trở xuống&nbsp;có ý định tham gia&nbsp;Chương trình hỗ trợ lẫn nhau&nbsp;để&nbsp;hỗ trợ lẫn nhau&nbsp;đối với&nbsp;bệnh hiểm&nbsp;nghèo&nbsp;của Ô Xanh</b>:</p>

            <p>Cân nặng lúc sinh không dưới 2 kg, tuổi thai khi sinh không dưới 36 tuần; không bị ngạt, thiếu oxy từ khi đẻ đến sau đẻ một tuần, không chậm phát triển, bại não.</p>

        </div>

    </div>
    <div class="fancybox-footer">
        <div class="d-flex justify-content-center">
            <a href="javascript:void(0);" class="btn ci-btn ci-btn-200 ci-btn-outline mx-2 mx-lg-4" onclick="fancybox_new_modal('#truong-hop-ngoai-le')">Không</a>
            <a href="<?php echo esc_url(home_url('/oxanh/b1-nhap-thong-tin/')); ?>" class="btn ci-btn ci-btn-200 ci-bg-sub-color mx-2 mx-lg-4">Có</a>
        </div>
    </div>
</div>
<!--End - Modal Thông tin sức khoẻ-->

<!-- Modal Thông tin sức khoẻ -->
<div id="truong-hop-ngoai-le" class="fancybox-modal fancybox-content-lg">
    <div class="fancybox-header">
        <div class="fancybox-title text-center">
            Các trường hợp ngoại lệ
        </div>
    </div>
    <div class="fancybox-body">
        <div class="mb-4 fw-medium">
            Mặc dù có bệnh/tình trạng bệnh trên nhưng tôi thuộc các trường hợp ngoại lệ dưới đây vì đáp ứng các yêu cầu sau:
        </div>

        <div class="mb-4 text-justify">
            <p><i class="far fa-circle-1 sub-color2 me-2"></i> Trong phần <b>điều trị y tế</b> , bạn có thể tham gia chương trình khi có đủ các điều kiện sau và các điều kiện khác của yêu cầu sức khỏe này:
                Điều trị y tế để sinh con bình thường, điều hòa kinh nguyệt, cảm lạnh thông thường hoặc cảm lạnh và các bệnh nhiễm trùng đường hô hấp trên,
                viêm dạ dày ruột cấp tính hoặc viêm ruột thừa, tổn thương cơ hoặc khớp nhẹ, gãy xương không biến chứng, thoát vị đĩa đệm thắt lưng và thoái hóa đốt sống cổ.</p>
            <p><i class="far fa-circle-2 sub-color2 me-2"></i> <b>Các nốt hoặc cục ở vú chưa được chẩn đoán rõ ràng là lành tính</b>: đáp ứng bất kỳ điều kiện nào sau đây và
                đáp ứng các điều kiện khác của yêu cầu sức khỏe này, có thể tham gia chương trình:
                <br>&nbsp;a. Được chẩn đoán là tăng sản vú hoặc khối tăng sản;
                <br>&nbsp;b. Khám siêu âm hoặc chụp nhũ ảnh trong vòng 1 năm nếu không có bất kỳ bệnh lý nào sau đây: nốt hoặc khối có ranh giới không rõ ràng,
                hình dạng bất thường, một ít phản xạ hoặc vi vôi hóa, nổi hạch ở nách, BI-RADS cấp 4 hoặc cao hơn.
            </p>
            <p><i class="far fa-circle-3 sub-color2 me-2"></i> <b>Các nốt tuyến giáp chưa được chẩn đoán rõ là lành tính</b>: đáp ứng các điều kiện sau và đáp ứng các điều kiện khác của yêu cầu về
                sức khỏe này thì được tham gia chương trình: <br>
                Những người đã khám siêu âm trong vòng 1 năm qua mà <b>không</b> có bất kỳ bệnh lý nào sau đây: ranh giới nốt không rõ ràng, siêu âm hoặc vi vôi hóa một chút, lưu lượng máu dồi dào, sưng hạch bạch huyết ở cổ, TI-RADS độ 4 trở lên.
            <p><i class="far fa-circle-4 sub-color2 me-2"></i> Đối với <b>bệnh tim</b>, bạn có thể tham gia chương trình nếu đáp ứng các điều kiện sau và đáp ứng các yêu cầu sức khỏe khác:
                Bệnh tim bẩm sinh đã tự khỏi hoặc phẫu thuật được 2 năm, siêu âm tim hoàn toàn bình thường.
            <p>
            <p><i class="far fa-circle-5 sub-color2 me-2"></i> Người <b>viêm gan (bao gồm cả người mang vi rút viêm gan)</b> đáp ứng các điều kiện sau và đáp ứng các điều kiện khác của yêu cầu sức khỏe này có thể tham gia chương trình:
                <br>&nbsp;<b>a. Viêm gan B:</b>
                <br>&nbsp;&nbsp; 1) Khám viêm gan B trong vòng 1 năm qua, viêm gan B có nhỏ hơn 3 chỉ dấu dương tính (HBsAg, HBeAg, HBcAg dương tính) hoặc không vượt quá 2 chỉ dấu dương tính (HBsAg, HbcAg/HbeAg dương tính), chức năng gan (ALT, AST) hoàn toàn bình thường, và siêu âm gan bình thường Hoặc chỉ gợi ý nang gan, u máu gan, gan nhiễm mỡ; hoặc:
                <br>&nbsp;&nbsp;2) Khám viêm gan B trong vòng 1 năm trở lại đây, kháng thể bề mặt viêm gan B (HBsAg) dương tính, siêu âm gan bình thường hoặc chỉ cho biết nang gan, u máu trong gan, gan nhiễm mỡ.
                <br> &nbsp;<b>b. Viêm gan C:</b>
                Khám viêm gan C trong vòng 1 năm trở lại đây, ARN virus viêm gan C âm tính, chức năng gan (ALT, AST) hoàn toàn bình thường, siêu âm gan bình thường hoặc chỉ thấy nang gan, u máu trong gan, gan nhiễm mỡ.
                <br>&nbsp;<b>c. Viêm gan siêu vi A và viêm gan siêu vi E</b> đã được chữa khỏi.
            </p>

            <p><i class="far fa-circle-6 sub-color2 me-2"></i> <b>Chảy máu âm đạo bất thường</b> có thể tham gia chương trình khi đáp ứng các điều kiện sau và các điều kiện khác của yêu cầu sức khỏe này:
                Chảy máu âm đạo bất thường do polyp lành tính cổ tử cung, polyp lành tính nội mạc tử cung, viêm nội mạc tử cung, u xơ tử cung,
                rối loạn chức năng tử cung hoặc kinh nguyệt không đều.</p>
            <p><i class="far fa-circle-7 sub-color2 me-2"></i> <b>U nang buồng trứng lành tính chưa được chẩn đoán</b> có thể tham gia chương trình nếu đáp ứng bất kỳ điều kiện nào sau đây và
                đáp ứng các điều kiện khác của yêu cầu sức khỏe này:
                U nang đơn giản, u nang sinh lý, u nang sô cô la, u nang hoàng thể, nang noãn hoặc buồng trứng đa nang.</p>


        </div>


    </div>
    <div class="fancybox-footer">
        <div class="d-flex justify-content-center">
            <a href="javascript:void(0);" class="btn ci-btn ci-btn-200 ci-btn-outline mx-2 mx-lg-4" onclick="fancybox_new_modal('#khong-dong-y')">Không</a>
            <a href="javascript:void(0);" onclick="fancybox_new_modal('#thong-tin-suc-khoe')" class="btn ci-btn ci-btn-200 ci-bg-sub-color mx-2 mx-lg-4">Có</a>
        </div>
    </div>
</div>
<!--End - Modal Thông tin sức khoẻ-->



<!-- Modal Thông tin sức khoẻ -->
<div id="khong-dong-y" class="fancybox-modal fancybox-content-md">
    <div class="fancybox-body">
        <div>
            <span class="fw-medium"> Cảm ơn bạn đã chọn tham gia Bảo hiểm ung thư </span><br>
            Với thông tin bạn đã cung cấp, chúng tôi rất tiếc chưa thể chấp nhận Hồ sơ yêu cầu
            bảo hiểm tại thời điểm hiện tại. <br>
            Bạn có thể liên hệ Công ty Cổ phần Công nghệ Internet Ô Xanh qua website hoặc Tổng đài
            <span class="fw-medium"><a href="tel:19001234">19001234</a></span> (miễn phí)
            để được tư vấn thêm.
        </div>
    </div>
    <div class="fancybox-footer">
        <div class="d-flex justify-content-center">
            <a href="javascript:void(0);" class="btn ci-btn ci-btn-200 ci-bg-sub-color mx-2 mx-lg-4" data-fancybox-close>Đóng</a>
        </div>
    </div>
</div>
<!--End - Modal Thông tin sức khoẻ-->


<!-- Modal Upload Files -->
<div id="upload-files" class="fancybox-modal fancybox-content-lg">
    <div class="fancybox-header">
        <div class="fancybox-title text-center">
            <i class="fa-solid fa-arrow-up-from-bracket fa-fw main-color"></i>Tải lên giấy yêu cầu tương trợ
        </div>
    </div>
    <div class="fancybox-body fz-16 ">
        <table class="table overflow-hidden" width="100%">
            <tbody>
                <tr>
                    <td width="80%">
                        <div class="fw-medium"><i class="far fa-circle-1 sub-color2 me-2"></i> Tải lên giấy đề nghị tương trợ</div>
                        <div class="input-list-files"></div>
                    </td>
                    <td width="20%" class="text-end">
                        <div class="input-file-container">
                            <input id="fileupload1" class="input-file" name="files" type="file" multiple="">
                            <label for="fileupload1" class="input-file-trigger"><i class="fas fa-upload me-2"></i>Tải lên</label>
                        </div>
                    </td>
                </tr>


                <tr>
                    <td width="80%">
                        <div class="fw-medium"><i class="far fa-circle-2 sub-color2 me-2"></i> Tải lên giấy ủy quyền trích sao tóm tắt bệnh án/Hồ sơ bệnh án</div>
                        <div class="input-list-files"></div>
                    </td>
                    <td width="20%" class="text-end">
                        <div class="input-file-container">
                            <input id="fileupload2" class="input-file" name="files" type="file" multiple="">
                            <label for="fileupload2" class="input-file-trigger"><i class="fas fa-upload me-2"></i>Tải lên</label>
                        </div>
                    </td>
                </tr>


                <tr>
                    <td width="80%">
                        <div class="fw-medium"><i class="far fa-circle-3 sub-color2 me-2"></i> Tải lên giấy ủy quyền yêu cầu tương trợ (khi người yêu cầu không phải là người bị bệnh hiểm nghèo)</div>
                        <div class="input-list-files"></div>
                    </td>
                    <td width="20%" class="text-end">
                        <div class="input-file-container">
                            <input id="fileupload3" class="input-file" name="files" type="file" multiple="">
                            <label for="fileupload3" class="input-file-trigger"><i class="fas fa-upload me-2"></i>Tải lên</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- <p>2. Tải lên giấy ủy quyền trích sao tóm tắt bệnh án/Hồ sơ bệnh án</p>
        <p>3. Tải lên giấy ủy quyền yêu cầu tương trợ (khi người yêu cầu không phải là người bị bệnh hiểm nghèo)</p> -->
    </div>
    <div class="fancybox-footer">
        <div class="d-flex justify-content-center">
            <a href="javascript:void(0);" class="btn ci-btn ci-bg-sub-color mx-2 mx-lg-4">Upload danh sách files</a>
        </div>
    </div>
</div>
<!--End - Modal Tôi đồng ý -->

<!-- Bảng danh mục -->
<div id="danh-muc-benh" class="fancybox-modal fancybox-content-xl">
    <div class="fancybox-header">
        <div class="fancybox-title text-center">
            Bảng danh mục các bệnh hiểm nghèo
        </div>
    </div>
    <div class="fancybox-body fz-16 ">

        <ul class="danh-muc-benh d-flex flex-wrap">
            <li>1. Ung thư nghiêm trọng</li>
            <li>2. Nhồi máu cơ tim cấp tính</li>
            <li>3. Đột quỵ nghiêm trọng</li>
            <li>4. Phẫu thuật bắc cầu động mạch vành</li>
            <li>5. Suy thận</li>
            <li>6. Chấn thương đầu nghiêm trọng</li>
            <li>7. Bệnh phổi giai đoạn cuối</li>
            <li>8. Suy gan giai đoạn cuối</li>
            <li>9. Thương tật toàn bộ vĩnh viễn</li>
            <li>10. Phẫu thuật động mạch chủ</li>
            <li>11. Phẫu thuật van tim</li>
            <li>12. Viêm gan tối cấp</li>
            <li>13. Bỏng nặng</li>
            <li>14. Cấy ghép cơ quan nội tạng chính/ tủy xương</li>
            <li>15. Khối u não lành tính</li>
            <li>16. Viêm não do vi-rút</li>
            <li>17. Viêm màng não do vi khuẩn</li>
            <li>18. Điếc (mất thích lực)</li>
            <li>19. Mù (mất thị lực)</li>
            <li>20. Câm (Mất khả năng ngôn ngữ, phát âm)</li>
            <li>21. Mất hai chi</li>
            <li>22. Tăng áp lực động mạch phổi nguyên phát</li>
            <li>23. Nhiễm HIV do truyền máu và nhiễm HIV do nghề nghiệp </li>
            <li>24.Thiếu máu bất sản (suy tủy xương) </li>
            <li>25.Bệnh đa xơ cứng nặng</li>
            <li>26.Loạn dưỡng cơ nặng</li>
            <li>27.Tạo hình mạch và Điều trị xâm lấn khác trên động mạch vành</li>
            <li>28.Bệnh Parkinson</li>
            <li>29.Hôn mê </li>
            <li>30.Tê liệt (mất khả năng sử dụng tay chân)</li>
            <li>31.Bệnh giai đoạn cuối </li>
            <li>32.Xơ cứng bì tiến triển</li>
            <li>33.Hội chứng Apallic (Hoại tử toàn bộ vỏ não )</li>
            <li>34.Lupus ban đỏ hệ thống có biến chứng viêm thận do lupus</li>
            <li>35.Bệnh động mạch vành nghiêm trọng khác</li>
            <li>36.Bại liệt</li>
            <li>37.Mất khả năng sống độc lập</li>
            <li>38.Bệnh nang tủy thận nặng</li>
            <li>39.Viêm tụy mãn tính tái phát nặng</li>
            <li>40. Bệnh Alzheimer/ Chứng mất trí nhớ nghiêm trọng </li>
            <li>41.Teo cơ cột sống tiến triển nặng ở trẻ.</li>
            <li>42. Viêm đa khớp dạng thấp nặng</li>
            <li>43.Hoại thư do liên cầu khuẩn tan huyết</li>
            <li>44. Bệnh rối loạn thần kinh vận động </li>
            <li>45.Bệnh cơ tim nguyên phát nặng</li>
            <li>46. Bệnh chân voi</li>
        </ul>
    </div>
</div>
<!-- End - Bảng danh mục -->



<!-- Bước đăng ký -->
<div id="step-1" class="fancybox-modal fancybox-content-md">
    <div class="fancybox-header">
        <div class="fancybox-title text-center">
            Bước 1: Đăng ký
        </div>
    </div>
    <div class="fancybox-body fz-16 ">
        Người dùng đăng ký thông tin (họ và tên, ngày tháng năm sinh và số mobile/email, tên đăng nhập, Password ..vv.
        Sau khi hoàn thành nhập thông tin, người dùng sẽ nhận được tin nhắn <span class="fw-medium">OTP/MÃ THAM GIA THÀNH VIÊN </span> gửi vào mobile/email để bổ sung bảo mật đăng nhập.
    </div>
</div>
<div id="step-2" class="fancybox-modal fancybox-content-md">
    <div class="fancybox-header">
        <div class="fancybox-title text-center">
            Bước 2: Đăng nhập
        </div>
    </div>
    <div class="fancybox-body fz-16 ">
        Đăng nhập bằng tên đăng nhập (vừa khai báo), mật khẩu và mã <span class="fw-medium">OTP/MÃ THAM GIA THÀNH VIÊN </span> (gửi qua tin nhắn/email)
    </div>
</div>
<!-- <div id="step-3" class="fancybox-modal fancybox-content-md">
    <div class="fancybox-header">
        <div class="fancybox-title text-center">
            Bước 3: Kê khai thông tin
        </div>
    </div>
    <div class="fancybox-body fz-16 ">
        <p class="mb-3">Vào kê khai thông tin. Nếu đáp ứng yêu cầu của nền tảng thì kích vào nút nộp hồ sơ để chụp ảnh hoặc mở files (trên máy tính/máy di động) hồ sơ khám bệnh.</p>
        <p class="mb-3">Trường hợp tại thời điểm kê khai thông tin, thành viên chưa sẵn sàng có hồ sơ khám bệnh thì bấm vào nút “nộp sau” để nộp vào thời gian chờ.</p>
    </div>
</div> -->
<div id="step-3" class="fancybox-modal fancybox-content-md">
    <div class="fancybox-header">
        <div class="fancybox-title text-center">
            Bước 3: Chọn gói kế hoạch tương trợ và kê khai thông tin
        </div>
    </div>
    <div class="fancybox-body fz-16 ">
        <p class="mb-3"><b>Chọn tham gia gói tương trợ</b> <span class="fw-medium">(G1, G2 hay G3)</span> để nộp phí thành viên và chính thức trở thành thành viên của nền tảng vào lúc 0h00 ngày kế tiếp.</p>
        <p class="mb-0"><b>Vào kê khai thông tin.</b> Nếu đáp ứng yêu cầu của nền tảng thì kích vào nút nộp hồ sơ để chụp ảnh hoặc mở files (trên máy tính/máy di động) hồ sơ khám bệnh.</p>
        <p class="mb-0">Trường hợp tại thời điểm kê khai thông tin, thành viên chưa sẵn sàng có hồ sơ khám bệnh thì bấm vào nút “nộp sau” để nộp vào thời gian chờ.</p>
    </div>
</div>
<div id="step-4" class="fancybox-modal fancybox-content-lg">
    <div class="fancybox-header">
        <div class="fancybox-title text-center">
            Bước 4: Thanh toán (có clip hướng dẫn)
        </div>
    </div>
    <div class="fancybox-body fz-16 ">
        <p class="mb-3">Nếu chọn thanh toán qua ngân hàng app/web sẽ tự động link đến các tài khoản Ngân hàng để thanh toán luôn.</p>
        <p class="mb-3">Hoặc chủ động thanh toán ngoài bằng chuyển khoản thì nội dung thanh toán ghi đúng cú pháp là <span class="fw-medium">“thanh toán cho HỌ TÊN, MÃ THAM GIA THÀNH VIÊN”</span> của bạn.</p>
        <p class="mb-3">Bạn cũng có thể thanh toán phí thành viên bằng các loại thẻ và ví điện tử.</p>
        <p class="mb-3">Bạn cũng có thể đến các bưu cục để nhờ chuyển tiền, nhờ người khác chuyển khoản hộ, thậm chí trực tiếp đến văn phòng Ô Xanh để nộp.</p>
        <p class="mb-3">Nhưng mọi trường hợp khi thanh toán đều phải ghi rõ nội dung theo cú pháp: <span class="fw-medium">“thanh toán cho HỌ TÊN, MÃ THAM GIA THÀNH VIÊN”</span> của bạn.</p>
        <p class="mb-3">Nếu thanh toán mà bạn không ghi rõ nội dung thanh toán theo đúng cú pháp, phần mềm sẽ không nhận ra bạn đã thanh toán,
            trường hợp đó bạn cần điện thoại cho tổng đài hoặc hotline của Ô Xanh để nhờ trơ giúp.</p>

    </div>
</div>

<!-- End - Bước đăng ký -->

<!-- Số ngày lẻ G1-->
<div id="so-ngay-le-g1" class="fancybox-modal fancybox-content-lg">
    <div class="fancybox-header">
        <div class="fancybox-title text-center">
            Tính phí số ngày lẻ
        </div>
    </div>
    <div class="fancybox-body fz-16 ">
        <span class="equa text-center d-flex align-items-center justify-content-center mb-5">
            <span class="">Số ngày lẻ </span>
            <span class="mx-5">=</span>
            <span class="equa-wrap d-flex flex-column">
                <span class="mb-3 pb-3" style="border-bottom: 1px solid;">Phí năm</span>
                <span>360 ngày</span>
            </span>
            <span class="mx-5">x</span>
            <span>Số ngày lẻ</span>
        </span>
        <p class="mb-3">Hệ thống sẽ tự động tính phí thành viên năm đầu chính xác theo từng ngày và thông báo trước 01 tháng khi đến hạn cho những năm sau.</p>
        <i class="gray-color">Ví dụ: Anh A 35 tuổi, tham gia gói G1 vào ngày 10.05.2022 thì sẽ đóng phí lần tiếp theo vào ngày 30.05.2023,
            và mức phí được tính như sau: <br>
            + Phí từ ngày 10.05.2022 – 10.05.2023 là 1.500.000 đồng <br>
            + Phí từ ngày 10.05.2023 – 30.05.2023 là: 1.500.000 đồng : 360 ngày x 20 ngày = 83.333 đồng (làm tròn là 83.000 đồng) <br>
            Vậy lần đầu anh A sẽ đóng: 1.583.000 đồng.
        </i>
    </div>
</div>
<!-- End - Số ngày lẻ G1-->

<!-- Số ngày lẻ G2-->
<div id="so-ngay-le-g2" class="fancybox-modal fancybox-content-lg">
    <div class="fancybox-header">
        <div class="fancybox-title text-center">
            Tính phí số ngày lẻ
        </div>
    </div>
    <div class="fancybox-body fz-16 ">
        <span class="equa text-center d-flex align-items-center justify-content-center mb-5">
            <span class="">Số ngày lẻ </span>
            <span class="mx-5">=</span>
            <span class="equa-wrap d-flex flex-column">
                <span class="mb-3 pb-3" style="border-bottom: 1px solid;">Phí năm</span>
                <span>360 ngày</span>
            </span>
            <span class="mx-5">x</span>
            <span>Số ngày lẻ</span>
        </span>
        <p class="mb-3">Hệ thống sẽ tự động tính phí thành viên năm đầu chính xác theo từng ngày và thông báo trước 01 tháng khi đến hạn cho những năm sau.</p>
        <i class="gray-color">Ví dụ: Anh A 35 tuổi, tham gia gói G2 vào ngày 10.05.2022 thì sẽ đóng phí lần tiếp theo vào ngày 30.05.2023,
            và mức phí được tính như sau: <br>
            + Phí từ ngày 10.05.2022 – 10.05.2023 là 2.250.000 đồng <br>
            + Phí từ ngày 10.05.2023 – 30.05.2023 là: 2.250.000 đồng : 360 ngày x 20 ngày = 125.000 đồng. <br>
            Vậy lần đầu anh A sẽ đóng: 2.375.000 đồng.
        </i>
    </div>
</div>
<!-- End - Số ngày lẻ G2-->

<!-- Số ngày lẻ G3-->
<div id="so-ngay-le-g3" class="fancybox-modal fancybox-content-lg">
    <div class="fancybox-header">
        <div class="fancybox-title text-center">
            Tính phí số ngày lẻ
        </div>
    </div>
    <div class="fancybox-body fz-16 ">
        <span class="equa text-center d-flex align-items-center justify-content-center mb-5">
            <span class="">Số ngày lẻ </span>
            <span class="mx-5">=</span>
            <span class="equa-wrap d-flex flex-column">
                <span class="mb-3 pb-3" style="border-bottom: 1px solid;">Phí năm</span>
                <span>360 ngày</span>
            </span>
            <span class="mx-5">x</span>
            <span>Số ngày lẻ</span>
        </span>
        <p class="mb-3">Hệ thống sẽ tự động tính phí thành viên năm đầu chính xác theo từng ngày và thông báo trước 01 tháng khi đến hạn cho những năm sau.</p>
        <i class="gray-color">Ví dụ: Anh A 35 tuổi, tham gia gói G3 vào ngày 10.05.2022 thì sẽ đóng phí lần tiếp theo vào ngày 30.05.2023,
            và mức phí được tính như sau: <br>
            + Phí từ ngày 10.05.2022 – 10.05.2023 là 3.750.000 đồng <br>
            + Phí từ ngày 10.05.2023 – 30.05.2023 là: 3.750.000 đồng : 360 ngày x 20 ngày = 208.333 đồng (làm tròn 208.000 đồng). <br>
            Vậy lần đầu anh A sẽ đóng: 3.958.000 đồng.
        </i>
    </div>
</div>
<!-- End - Số ngày lẻ G3-->


<!-- Nộp phí và Gia hạn-->
<div id="nop-phi-gia-han" class="fancybox-modal fancybox-content-lg">
    <div class="fancybox-header">
        <div class="fancybox-title text-center">
            Nộp phí năm tiếp theo và thời gian gia hạn
        </div>
    </div>
    <div class="fancybox-body fz-16 ">

        <p class="mb-2 text-justify">Trước khi đến thời điểm nộp phí 30 ngày, ngay cả khi vẫn còn số dư trong tài khoản,
            Nền tảng sẽ gửi đến thành viên thông báo thu phí cho năm tiếp theo (Phụ lục 02 - theo Mẫu được đăng tải trên Website).
        </p>
        <p class="mb-2 text-justify">Bạn nên đảm bảo rằng nộp phí thành viên đầy đủ và đúng hạn. Nếu phí được nộp không đúng hạn hoặc không đủ, thời gian gia hạn thanh toán được kéo dài thêm 05 ngày làm việc kể từ 0h00
            ngày đáng ra phải hoàn thành việc nộp phí. </p>
        <p class="mb-2 text-justify">Trong trường hợp xảy ra sự cố viện trợ lẫn nhau trong thời gian gia hạn, đơn xin Trợ giúp lẫn nhau vẫn có thể được bắt đầu,
            nhưng số phí thành viên còn thiếu sẽ được khấu trừ khi thanh toán khoản viện trợ lẫn nhau. </p>

        <p class="mb-2 text-justify fw-medium">Nếu hết thời gian gia hạn, thành viên vẫn chưa hoàn thành việc đóng góp phí,
            thành viên sẽ bị rút khỏi kế hoạch Trợ giúp lẫn nhau kể từ 0h:00 ngày sau khi hết thời gian gia hạn, trừ khi có thỏa thuận khác.</p>

        <span class="equa text-center d-flex align-items-center justify-content-center my-4">
            Phí thành viên của năm kế tiếp = Phí thành viên theo phụ lục 1 (–) 50% số dư tài khoản (+/-) a% Phí thành viên
        </span>

        <i class="gray-color d-block text-center">(a là tỷ lệ dự báo tăng giảm phí thành viên của năm tới) </i>
    </div>
</div>
<!-- End - Số ngày lẻ -->


<!-- Nội dung tương trợ-->
<div id="noi-dung-tuong-tro" class="fancybox-modal fancybox-content-lg">
    <div class="fancybox-header">
        <div class="fancybox-title text-center">
            Nội dung tương trợ
        </div>
    </div>
    <div class="fancybox-body fz-16 ">
        <p class="mb-3">SAU THỜI GIAN CHỜ 90 NGÀY và trong thời gian là thành viên của chương trình, một thành viên bị tai nạn và/hoặc được chẩn đoán ban đầu (lần đầu tiên được chẩn đoán)
            là mắc bệnh nặng trong danh mục bệnh hiểm nghèo được xác định trong chương trình này VÀ SỐNG SÓT SAU 7 NGÀY kể từ ngày bị tai nạn và/hoặc được chẩn đoán mắc bệnh hiểm nghèo, thành viên bị bệnh có thể gửi đơn xin Trợ giúp lẫn nhau cho chúng tôi. </p>
        <p class="mb-3">Sau khi kết thúc điều tra sự cố tương trợ của thành viên, chúng tôi sẽ bắt đầu phân bổ viện trợ lẫn nhau cho các thành viên trong
            kế hoạch này và thanh toán quỹ trợ giúp lẫn nhau cho các thành viên bị bệnh nếu xác định được thông qua các thủ tục liên quan rằng việc Trợ giúp lẫn nhau cần được thực hiện.
            Việc thanh toán được thực hiện 1 lần toàn bộ số tiền tương trợ thành viên.</p>
        <p class="mb-3"> Trừ những trường hợp đặc biệt, Ô Xanh có thể tạm ứng trước (nhưng không quá 50%) để thành viên có thời gian hoàn thiện hồ sơ xin tương trợ.</p>
        Các bệnh hiểm nghèo được định nghĩa trong kế hoạch này đề cập đến các bệnh, trạng thái bệnh hoặc các hoạt động được quy định trong <a title="Xem danh mục" onclick="fancybox_modal('#danh-muc-benh');">Các bệnh hiểm nghèo</a>.
    </div>
</div>
<!-- End - Nội dung tương trợ -->


<!-- Rút khỏi kế hoạch-->
<div id="rut-khoi-ke-hoach" class="fancybox-modal fancybox-content-lg">
    <div class="fancybox-header">
        <div class="fancybox-title text-center">
            <i class="far fa-file-slash me-2 text-danger"></i> Rút khỏi kế hoạch
        </div>
    </div>
    <div class="fancybox-body fz-16 ">
        <div class="ci-faq ">
            <div id="ci-rutkhoi" class="accordion">
                <div class="accordion-item">
                    <div class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rutkhoi0" aria-expanded="true">
                            <span class="fz-18">Các thành viên tự nguyện rút khỏi kế hoạch</span>
                        </button>
                    </div>
                    <div id="rutkhoi0" class="accordion-collapse collapse" data-bs-parent="#ci-rutkhoi">
                        <div class="accordion-body">
                            Thành viên có thể xin rút khỏi chương trình bất cứ lúc nào và nhận lại phí đã đóng mà không tính lãi sau khi trừ đi phí quản lý, phí đã chia sẻ và/hoặc chấp nhận chia sẻ đến thời điểm hoàn thành việc rút khỏi chương trình.
                            Sau khi một thành viên rút khỏi chương trình và đáp ứng các điều kiện để tham gia lại chương trình, thời gian chờ được tính lại.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-header">
                        <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#rutkhoi2" aria-expanded="true">
                            <span class="fz-18">Kế hoạch thoát tự động</span>
                        </button>
                    </div>
                    <div id="rutkhoi2" class="accordion-collapse collapse" data-bs-parent="#ci-rutkhoi">
                        <div class="accordion-body">
                            Thành viên sẽ rút khỏi chương trình khi xảy ra một trong các trường hợp sau:
                            <span class="d-block my-3 ms-4">(1) Những người đã đủ 65 tuổi;</span>
                            <span class="d-block my-3 ms-4">(2) Những người đã nhận được quỹ Trợ giúp lẫn nhau của kế hoạch này;</span>
                            <span class="d-block my-3 ms-4">(3) Được xác minh rằng họ không đáp ứng các điều kiện tham gia;</span>
                            <span class="d-block my-3 ms-4">(4) Không đóng phí thành viên và phí quản lý như đã thỏa thuận;</span>
                            <span class="d-block my-3 ms-4">(5) Các yếu tố chính sách hoặc bất khả kháng khiến kế hoạch không thể tồn tại;</span>
                            <span class="d-block my-3 ms-4">(6) Được xác minh rằng khi tham gia chương trình này, họ không đáp ứng các yêu cầu về sức khỏe,
                                hoặc mắc bệnh hiểm nghèo theo quy định trong kế hoạch trợ giúp lẫn nhau này;</span>
                            <span class="d-block my-3 ms-4">(7) Kế hoạch viện trợ lẫn nhau cần được chấm dứt theo điều khoản này;</span>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-header">
                        <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#rutkhoi3" aria-expanded="true">
                            <span class="fz-18">Tác động của việc thoát khỏi kế hoạch viện trợ lẫn nhau</span>
                        </button>
                    </div>
                    <div id="rutkhoi3" class="accordion-collapse collapse" data-bs-parent="#ci-rutkhoi">
                        <div class="accordion-body">
                            Thành viên sẽ rút khỏi chương trình khi xảy ra một trong các trường hợp sau:
                            <span class="d-block my-3 ms-4">(1) Nếu thành viên rút lui, bảo đảm tương trợ sẽ bị chấm dứt;</span>
                            <span class="d-block my-3 ms-4">(2) Tại thời điểm rút lui, số tiền đã phân bổ tương ứng với từng thời kỳ và các trường hợp đã phê duyệt và công khai, thành viên vẫn có trách nhiệm tương trợ;</span>
                            <span class="d-block my-3 ms-4">(3) Thời gian chờ sẽ được áp dụng nếu tham gia lại;</span>
                            <span class="d-block my-3 ms-4"> (4) Các thành viên đã nộp đơn xin trợ giúp lẫn nhau thành công và rút lui, khi tham gia lại kế hoạch, chỉ tham gia vào
                                việc phân bổ các khoản viện trợ lẫn nhau mà không còn quyền được nhận hỗ trợ lẫn nhau.</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End - Rút khỏi kế hoạch -->


<!-- Hoàn cảnh không có sự hỗ trợ lẫn nhau -->
<div id="hoan-canh-khong-su-ho-tro" class="fancybox-modal fancybox-content-xl">
    <div class="fancybox-header">
        <div class="fancybox-title text-center">
            <i class="fas fa-shield-slash text-danger me-2"></i>Hoàn cảnh không có sự hỗ trợ lẫn nhau
        </div>
    </div>
    <div class="fancybox-body fz-16 ">
        <div class="ci-faq">
            <div id="ci-hoancanh" class="accordion">
                <div class="accordion-item">
                    <div class="accordion-header">
                        <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#hoancanh0" aria-expanded="true">
                            <span class="fz-18">1. Nếu một thành viên bị bệnh nặng như được xác định trong chương trình này nhưng do
                                các trường hợp sau thì sẽ không thể nhận được sự hỗ trợ lẫn nhau</span>
                        </button>
                    </div>
                    <div id="hoancanh0" class="accordion-collapse collapse" data-bs-parent="#ci-hoancanh">
                        <div class="accordion-body">
                            <span class="d-block my-3 ms-4">+ Thành viên bị người trả tiền (phí thành viên) cố ý giết hoặc bị thương;</span>
                            <span class="d-block my-3 ms-4">+ Thành viên phạm tội cố ý hoặc chống lại các biện pháp cưỡng chế hình sự theo quy định của pháp luật</span>
                            <span class="d-block my-3 ms-4">+ Các hành động khiêu khích hoặc cố ý của các thành viên dẫn đến đánh nhau hoặc bị tấn công;</span>
                            <span class="d-block my-3 ms-4">+ Các thành viên chủ động uống hoặc tiêm thuốc (không theo chỉ dẫn của bác sỹ);</span>
                            <span class="d-block my-3 ms-4">+ Thành viên lái xe có động cơ trong khi say rượu, hoặc lái xe không có động cơ trong khi say;</span>
                            <span class="d-block my-3 ms-4">+ Lái xe mà không có giấy phép lái xe hợp pháp, hoặc điều khiển xe cơ giới mà không có giấy phép lái xe hợp pháp;</span>
                            <span class="d-block my-3 ms-4">+ Thành viên tự sát hoặc cố ý gây thương tích;</span>
                            <span class="d-block my-3 ms-4">+ Các thành viên bị nhiễm HIV hoặc AIDS, trừ khi có thỏa thuận khác trong kế hoạch này?;</span>
                            <span class="d-block my-3 ms-4">+ Các bệnh di truyền, dị tật bẩm sinh, dị tật hoặc bất thường nhiễm sắc thể, trừ khi có thỏa thuận khác trong kế hoạch này.</span>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#hoancanh1" aria-expanded="true">
                            <span class="fz-18">2. Bệnh/tình trạng hiểm nghèo của thành viên được gây ra,
                                toàn bộ hoặc một phần, bởi bất kỳ một trong những nguyên nhân dưới đây</span>
                        </button>
                    </div>
                    <div id="hoancanh1" class="accordion-collapse collapse" data-bs-parent="#ci-hoancanh">
                        <div class="accordion-body">
                            <span class="d-block my-3 ms-4">+ Bệnh tật hoặc thương tật khác với chẩn đoán bệnh/tình trạng hiểm nghèo theo định nghĩa tại Mục 7.1 dưới đây;</span>
                            <span class="d-block my-3 ms-4">+ Bệnh/tình trạng hiểm nghèo mà thành viên có triệu chứng, đã được xác minh, hoặc được chẩn đoán trước hoặc trong thời gian chờ trừ khi có thỏa thuận khác trong kế hoạch này;</span>
                            <span class="d-block my-3 ms-4">+ Bệnh/tình trạng hiểm nghèo phát sinh, trực tiếp từ một khuyết tật hoặc bệnh bẩm sinh đã xuất hiện hoặc được chẩn đoán trước thi tham gia thành viên;</span>
                            <span class="d-block my-3 ms-4">+ Thành viên không còn sống trong ít nhất bảy (7) ngày sau khi chẩn đoán bệnh/tình trạng hiểm nghèo;</span>
                            <span class="d-block my-3 ms-4">+ Bức xạ ion hóa hoặc ô nhiễm bởi phóng xạ từ bất kỳ nhiên liệu hạt nhân hoặc từ bất kỳ chất thải hạt nhân do đốt nhiên liệu hạt nhân;</span>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <button class="accordion-button collapsed button-hidden" type="button" data-bs-toggle="collapse" data-bs-target="#hoancanh2" aria-expanded="true">
                            <span class="fz-18">3. Khi tham gia chương trình một thành viên không đáp ứng các yêu cầu về sức khỏe,
                                hoặc mắc bệnh nặng theo quy định của chương trình, thành viên sẽ không thể nhận được sự
                                Trợ giúp lẫn nhau và tư cách thành viên của thành viên sẽ bị chấm dứt và thành viên sẽ
                                tự động rút khỏi chương trình thì được hoàn lại phí thành viên còn lại đến thời điểm rút khỏi chương trình.</span>
                        </button>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <button class="accordion-button collapsed button-hidden" type="button" data-bs-toggle="collapse" data-bs-target="#hoancanh3" aria-expanded="true">
                            <span class="fz-18"> 4. Thành viên đáp ứng các yêu cầu về sức khỏe khi tham gia chương trình và không mắc
                                bệnh hiểm nghèo như đã xác định trong kế hoạch. Nhưng khi thay đổi chương trình tương trợ,
                                lại không đáp ứng các yêu cầu về sức khỏe của chương trình mới.
                                Vì vậy khi bênh nặng thành viên đăng ký tham gia chương trình hỗ trợ lẫn nhau với chương trình mới sẽ không phù hợp mà</span>
                        </button>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <button class="accordion-button collapsed button-hidden" type="button" data-bs-toggle="collapse" data-bs-target="#hoancanh4" aria-expanded="true">
                            <span class="fz-18">5. Đặc biệt lưu ý: Thành viên mắc bệnh hiểm nghèo quy định tại Điều 7.1 của kế hoạch này, nhưng là đối tượng không tương trợ quy định tại Điều 7.1 của kế hoạch này thì thành viên đó không được tương trợ.
                                Vui lòng đọc kỹ toàn bộ nội dung của Điều 7.1, đặc biệt là phần in đậm.</span>
                        </button>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <button class="accordion-button collapsed button-hidden" type="button" data-bs-toggle="collapse" data-bs-target="#hoancanh5" aria-expanded="true">
                            <span class="fz-18">6. Thành viên tham gia các hoạt động hàng không (trừ khi với tư cách là hành khách), tham gia các cuộc diễn tập, huấn luyện quân sự, tham gia chiến đấu của các lực lượng vũ trang.
                                Điều trị thuốc không theo chỉ dẫn của cơ quan y tế.
                                Do động đất, núi lửa, sóng thần, nhiễm phóng xạ, chiến tranh, nội chiến, đình công, thiên tai, dịch bệnh,
                                các trường hợp bất khả kháng.</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End - Hoàn cảnh không có sự hỗ trợ lẫn nhau-->