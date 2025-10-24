
 // ========== DROPDOWN TOGGLE ==========
    document.querySelectorAll('.dropdown').forEach(drop => {
      drop.addEventListener('click', (e) => {
        e.stopPropagation();
        document.querySelectorAll('.dropdown').forEach(d => {
          if (d !== drop) d.classList.remove('show');
        });
        drop.classList.toggle('show');
      });
    });

    document.addEventListener('click', () => {
      document.querySelectorAll('.dropdown').forEach(d => d.classList.remove('show'));
    });

    // ========== LIGHT / DARK MODE ==========
    const modeBtn = document.getElementById('light-dark-mode');
    const icon = modeBtn.querySelector('i');
    modeBtn.addEventListener('click', (e) => {
      e.preventDefault();
      document.body.classList.toggle('dark');
      icon.textContent = document.body.classList.contains('dark') ? '☀️' : '🌙';
    });

    // ========== LIVE TIME ==========
    const dayTime = document.getElementById('dayTime');
    function updateTime() {
      const now = new Date();
      let hours = now.getHours();
      const minutes = now.getMinutes().toString().padStart(2, '0');
      const ampm = hours >= 12 ? 'PM' : 'AM';
      hours = hours % 12 || 12;
      dayTime.textContent = `${hours}:${minutes} ${ampm}`;
    }
    setInterval(updateTime, 1000);
    updateTime();








    // Toggle submenu open/close
    document.querySelectorAll('.has-submenu').forEach(item => {
        item.addEventListener('click', function(e) {
            // Prevent redirect if has submenu
            if (this.querySelector('.submenu')) {
                e.preventDefault();
                this.classList.toggle('open');
            }
        });
    });





