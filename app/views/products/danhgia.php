<!--Đánh giá-->
<div class="eva-product">
      <div class="eva-container">
          <div class="rating">
              <h2>Đánh giá sản phẩm này</h2>
              <h3>Nếu bạn đã mua sản phẩm này từ HV Apple. Hãy đánh giá ngay để giúp
                  hàng ngàn người chọn mua hàng tốt nhất nhé! Xin chân thành cảm ơn
                  các bạn rất nhiều.
              </h3>
              <ul>
                  <li><i class="bi bi-star" id="star1"></i></li>
                  <li><i class="bi bi-star" id="star2"></i></li>
                  <li><i class="bi bi-star" id="star3"></i></li>
                  <li><i class="bi bi-star" id="star4"></i></li>
                  <li><i class="bi bi-star" id="star5"></i></li>
              </ul>
              <script>
                  const stars = document.querySelectorAll('.bi-star');
          
                  stars.forEach((star, index) => {
                      star.addEventListener('mouseover', () => {
                          for (let i = 0; i <= index; i++) {
                              stars[i].style.color = '#f2b01e';
                          }
                      });
          
                      star.addEventListener('mouseout', () => {
                          for (let i = 0; i <= index; i++) {
                              stars[i].style.color = '#f2b01e';
                          }
                      });
                  });
              </script>
          </div>
      </div>
  </div>