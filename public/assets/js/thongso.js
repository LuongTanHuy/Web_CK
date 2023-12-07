filterBoxPopupEvent();
function filterBoxPopupEvent() {
    let boxs = document.querySelectorAll(".box-specifi");
    boxs.forEach((box) => {
      let title = box.querySelector(".title");
      let icon = title.querySelector(".icon");
      console.log(box);
      let content = box.querySelector(".content");
      title.onclick = () => {
        if (content.style.display == "none") {
            content.style.display = "block";
          icon.innerHTML = '<i class="bi bi-dash"></i>';
        } else {
            content.style.display = "none";
            icon.innerHTML = '<i class="bi bi-plus"></i>';
        }
      };
    });
  }
  