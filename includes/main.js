const follower = document.querySelector('.follower');
let mouseX = 0;
let mouseY = 0;
let followerX = 0;
let followerY = 0;
const speed = 0.1; // Điều chỉnh tốc độ delay (giá trị từ 0 đến 1)

function animate() {
  const distX = mouseX - followerX;
  const distY = mouseY - followerY;

  followerX = followerX + distX * speed;
  followerY = followerY + distY * speed;

  // Đặt vị trí của follower, trừ đi một nửa kích thước để căn giữa
  follower.style.left = followerX - follower.offsetWidth / 2 + 'px';
  follower.style.top = followerY - follower.offsetHeight / 2 + 'px';

  requestAnimationFrame(animate);
}

document.addEventListener('mousemove', function(event) {
  mouseX = event.clientX;
  mouseY = event.clientY;
});

animate(); // Bắt đầu animation loop