 <!-- thông số kĩ thuật  -->
 <div class="tab">
     <div class="tabs">
         <h2 class="tab-link">Thông Số Kĩ Thuật</h2>
     </div>
     <div class="accordion" id="accordionExample">
         <?php if(!empty($specify)):?>
         <?php foreach($specify as $item): ?>
         <div class="accordion-item">
             <h2 class="accordion-header">
                 <button class="accordion-button" type="button" data-bs-toggle="collapse"
                     data-bs-target="#collapseSepcify<?php echo $item['id']; ?>" aria-expanded="true"
                     aria-controls="collapseOne">
                     <strong><?php echo $item['title']; ?></strong>
                 </button>
             </h2>
             <div id="collapseSepcify<?php echo $item['id'] ?>" class="accordion-collapse collapse show"
                 data-bs-parent="#accordionExample">
                 <?php foreach($item['sub-specify'] as $subSpe): ?>
                 <div class="row p-2">
                     <div class="col-4"><?php echo $subSpe['name_space'] ?></div>
                     <div class="col-8"><?php echo $subSpe['value_space'] ?></div>
                 </div>
                 <?php endforeach; ?>
             </div>
         </div>
         <?php endforeach; ?>
         <?php endif; ?>
     </div>
 </div>
 <script src="./assets/js/thongso.js"></script>



 <!-- <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <strong>Camera</strong>
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col" style="font-weight: lighter;">Camera Sau:</th>
                    <th scope="col" style="font-weight: lighter; color:red">Chính 48 MP & Phụ 12 MP, 12 MP</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="col" style="font-weight: lighter;">Quay Phim (Camera Sau):</th>
                    <th scope="col" style="font-weight: lighter; color:red">từ HD 720p 30fps đến 8K 4320 24fps</th>
                  </tr>
                  <tr>
                    <th scope="col" style="font-weight: lighter;">Tính năng:</th>
                    <th scope="col" style="font-weight: lighter; color:red">Ban đêm (Night Mode), Bộ lọc màu, Chống rung quang học (OIS), Cinematic,
                    Deep Fusion, Dolby Vision HDR, Góc rộng (Wide), Góc siêu rộng (Ultrawide), Live Photo, Quay chậm (Slow Motion), Siêu độ phân giải, Smart HDR 5,
                    Toàn cảnh (Panorama), Trôi nhanh thời gian (Time Lapse), Xóa phông, Zoom kỹ thuật số, Zoom quang học, Ảnh Raw</th>
                  </tr>
                  <tr>
                    <th scope="col" style="font-weight: lighter;">Camera Trước:</th>
                    <th scope="col" style="font-weight: lighter; color:red">Độ phân giải: 12 MP</th>
                  </tr>
                  <tr>
                    <th scope="col" style="font-weight: lighter;">Tính năng:</th>
                    <th scope="col" style="font-weight: lighter; color:red">Smart HDR 5, Bộ lọc màu, Chụp đêm, Live Photo, Nhãn dán (AR Stickers)
                    Quay video 4K, Quay video Full HD, Quay video HD, Trôi nhanh thời gian (Time Lapse), Xóa phông</th>
                  </tr>
                </tbody>
              </table>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <strong> Hệ Điều Hành & CPU</strong>
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col" style="font-weight: lighter;">Hệ điều hành:</th>
                    <th scope="col" style="font-weight: lighter; color:red">IOS 17</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="col" style="font-weight: lighter;">Chip xử lý:</th>
                    <th scope="col" style="font-weight: lighter; color:red">Apple A17 Pro Bionic 6 nhân.</th>
                  </tr>
                  <tr>
                    <th scope="col" style="font-weight: lighter;">Tốc độ CPU:</th>
                    <th scope="col" style="font-weight: lighter; color:red">6.7" - Tần số quét 120 Hz</th>
                  </tr>
                  <tr>
                    <th scope="col" style="font-weight: lighter;">Chip đồ họa GPU:</th>
                    <th scope="col" style="font-weight: lighter; color:red">2000 nits</th>
                  </tr>
                </tbody>
              </table>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                  <strong>Bộ nhớ & Lưu trữ</strong>
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col" style="font-weight: lighter;">Dung lượng Ram:</th>
                    <th scope="col" style="font-weight: lighter; color:red">Ram 8GB</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="col" style="font-weight: lighter;">Dung lượng lưu trữ:</th>
                    <th scope="col" style="font-weight: lighter; color:red">256GB.</th>
                  </tr>
                </tbody>
              </table>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                  <strong>Pin & Sạc</strong>
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col" style="font-weight: lighter;"> Dung lượng pin: </th>
                    <th scope="col" style="font-weight: lighter; color:red">4422 mAh.</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="col" style="font-weight: lighter;">Loại pin:</th>
                    <th scope="col" style="font-weight: lighter; color:red"> Li-Ion</th>
                  </tr>
                  <tr>
                    <th scope="col" style="font-weight: lighter;">Hỗ trợ sạc tối đa lên đến:</th>
                    <th scope="col" style="font-weight: lighter; color:red"> 20W.</th>
                  </tr>
                  <tr>
                    <th scope="col" style="font-weight: lighter;">Sử dụng công nghệ pin:</th>
                    <th scope="col" style="font-weight: lighter; color:red"> Sạc không dây MagSafe, Sạc ngược không dây, Tiết kiệm pin</th>
                  </tr>
                </tbody>
              </table>
              </div>
            </div> -->