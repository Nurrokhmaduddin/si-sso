<!-- jQuery dulu (untuk AdminLTE) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- OverlayScrollbars -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.3/js/jquery.overlayScrollbars.min.js"></script>

<!-- Bootstrap 5 Bundle (JS + Popper) harus **sebelum** AdminLTE -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE v3 -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('.datatables1').DataTable({
      "pageLength": 10,
      "lengthChange": true, 
      "paging": true,
      "searching": true,
      "ordering": true,
      "info": true
    });
});
</script>
<script>

document.addEventListener('DOMContentLoaded', function(){

  const searchInput = document.getElementById('sidebarSearch');

  if(!searchInput) return;

  searchInput.addEventListener('keyup', function(){

    const keyword = this.value.toLowerCase();

    /*
    =====================================================
    LEVEL 1
    =====================================================
    */
    document.querySelectorAll('.nav-sidebar > .nav-item').forEach(function(level1){

      let level1Found = false;

      /*
      =====================================================
      LEVEL 2
      =====================================================
      */
      level1.querySelectorAll('ul.nav-treeview > .nav-item').forEach(function(level2){

        let level2Found = false;

        /*
        =====================================================
        LEVEL 3
        =====================================================
        */
        level2.querySelectorAll('.sidebar-search-item').forEach(function(item){

          const text = item.querySelector('.sidebar-search-text')
                           .innerText
                           .toLowerCase();

          if(text.includes(keyword)){

            item.style.display = '';

            level1Found = true;
            level2Found = true;

          }else{

            item.style.display = 'none';

          }

        });

        /*
        =====================================================
        AUTO OPEN LEVEL 2
        =====================================================
        */
        if(level2Found){

          level2.style.display = '';

          level2.classList.add('menu-open');

          const link = level2.querySelector('.nav-link');

          if(link){
            link.classList.add('active');
          }

        }else{

          if(keyword !== ''){

            level2.classList.remove('menu-open');

            const link = level2.querySelector('.nav-link');

            if(link){
              link.classList.remove('active');
            }

          }

        }

      });

      /*
      =====================================================
      AUTO OPEN LEVEL 1
      =====================================================
      */
      if(level1Found){

        level1.style.display = '';

        level1.classList.add('menu-open');

        const link = level1.querySelector('.nav-link');

        if(link){
          link.classList.add('active');
        }

      }else{

        if(keyword !== ''){

          level1.style.display = 'none';

        }else{

          level1.style.display = '';

          level1.classList.remove('menu-open');

          const link = level1.querySelector('.nav-link');

          if(link){
            link.classList.remove('active');
          }

        }

      }

    });

    /*
    =====================================================
    RESET JIKA SEARCH KOSONG
    =====================================================
    */
    if(keyword === ''){

      document.querySelectorAll('.sidebar-search-item').forEach(function(item){

        item.style.display = '';

      });

    }

  });

});

</script>
</body>
</html>