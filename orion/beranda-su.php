<?php $page='beranda-su';?>
<?php include "1header.php"; ?>
<?php include "2navbar.php"; ?>
<?php include "3sidebar.php"; ?>
 <!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Content Wrapper -->
  <div class="content-wrapper" style="min-height: 600px;">
    <div class="content-header">
      <!-- <div class="container-fluid"> -->
        <!-- <h2 class="mb-0"><i class="far fa-smile"></i> Selamat Datang, [nama pengguna]</h2> -->
        <!-- <p class="text-muted">Sistem Informasi - Single Sign On (SSO)</p>         -->
      <!-- </div> -->
    </div>
    <section class="content">
      <div class="container-fluid">

        <style>
  .kpi-card {
  transition: all 0.25s ease;
}

.kpi-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.08);
}

.kpi-icon {
  position: absolute;
  top: 16px;
  right: 16px;
  font-size: 2rem;
  opacity: 0.25;
}
</style>


<div class="content">

  <!-- HEADER -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <div>
      <h2 class="page-title mb-0">📊 Dashboard Penjualan</h2>
      <p class="page-description text-muted">
        Ringkasan performa penjualan dan transaksi tahun berjalan.
      </p>
    </div>
    <button class="btn btn-sm btn-outline-primary shadow-sm">🔄 Refresh Data</button>
  </div>

 

<!-- Grafik SECTION -->
<div class="card ">
  <div class="card-header"> 
    <h3 class="card-title"><i class="fas fa-chart-line me-2"></i>Trend Keuangan Bulanan</h3>
  </div>
  <div class="card-body">
    <canvas id="keuanganChart" width="100%" height="30"></canvas>
  </div>
</div>

  <!-- TABLE SECTION -->
  <div class="row g-4">

    <!-- TOP SELL PRODUK -->
    <div class="col-md-6">
      <div class="card border-0 shadow-sm rounded-4">
        <div class="card-header bg-white fw-semibold d-flex justify-content-between align-items-center">
          <span>🥇 Top 100 Produk Terjual</span>
          <small class="text-muted">Last 30 Days</small>
        </div>
        <div class="card-body small">
          <table class="table table-sm table-hover table-striped mb-0 align-middle datatables1">
            <thead class="table-light">
              <tr>
                <th width="60">Rank</th>
                <th>Kode Produk</th>
                <th>Merek</th>
                <th class="text-end">Qty</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>1</td><td>PRD-037</td><td>BBC</td><td class="text-end">500</td></tr>
              <tr><td>5</td><td>PRD-005</td><td>BBC</td><td class="text-end">480</td></tr>
              <tr><td>82</td><td>PRD-082</td><td>BBC</td><td class="text-end">96</td></tr>
              <tr><td>14</td><td>PRD-014</td><td>BBC</td><td class="text-end">433</td></tr>
              <tr><td>63</td><td>PRD-063</td><td>BBC</td><td class="text-end">191</td></tr>
              <tr><td>21</td><td>PRD-021</td><td>BBC</td><td class="text-end">402</td></tr>
              <tr><td>90</td><td>PRD-090</td><td>BBC</td><td class="text-end">58</td></tr>
              <tr><td>2</td><td>PRD-002</td><td>BBC</td><td class="text-end">497</td></tr>
              <tr><td>55</td><td>PRD-055</td><td>BBC</td><td class="text-end">231</td></tr>
              <tr><td>41</td><td>PRD-041</td><td>BBC</td><td class="text-end">301</td></tr>

              <tr><td>73</td><td>PRD-073</td><td>BBC</td><td class="text-end">142</td></tr>
              <tr><td>11</td><td>PRD-011</td><td>BBC</td><td class="text-end">451</td></tr>
              <tr><td>66</td><td>PRD-066</td><td>BBC</td><td class="text-end">176</td></tr>
              <tr><td>34</td><td>PRD-034</td><td>BBC</td><td class="text-end">336</td></tr>
              <tr><td>8</td><td>PRD-008</td><td>BBC</td><td class="text-end">466</td></tr>
              <tr><td>59</td><td>PRD-059</td><td>BBC</td><td class="text-end">212</td></tr>
              <tr><td>27</td><td>PRD-027</td><td>BBC</td><td class="text-end">371</td></tr>
              <tr><td>48</td><td>PRD-048</td><td>BBC</td><td class="text-end">267</td></tr>
              <tr><td>95</td><td>PRD-095</td><td>BBC</td><td class="text-end">31</td></tr>
              <tr><td>18</td><td>PRD-018</td><td>BBC</td><td class="text-end">417</td></tr>

              <tr><td>76</td><td>PRD-076</td><td>BBC</td><td class="text-end">126</td></tr>
              <tr><td>44</td><td>PRD-044</td><td>BBC</td><td class="text-end">286</td></tr>
              <tr><td>69</td><td>PRD-069</td><td>BBC</td><td class="text-end">161</td></tr>
              <tr><td>23</td><td>PRD-023</td><td>BBC</td><td class="text-end">392</td></tr>
              <tr><td>87</td><td>PRD-087</td><td>BBC</td><td class="text-end">71</td></tr>
              <tr><td>3</td><td>PRD-003</td><td>BBC</td><td class="text-end">492</td></tr>
              <tr><td>51</td><td>PRD-051</td><td>BBC</td><td class="text-end">252</td></tr>
              <tr><td>32</td><td>PRD-032</td><td>BBC</td><td class="text-end">346</td></tr>
              <tr><td>79</td><td>PRD-079</td><td>BBC</td><td class="text-end">111</td></tr>
              <tr><td>6</td><td>PRD-006</td><td>BBC</td><td class="text-end">476</td></tr>

              <tr><td>57</td><td>PRD-057</td><td>BBC</td><td class="text-end">221</td></tr>
              <tr><td>16</td><td>PRD-016</td><td>BBC</td><td class="text-end">426</td></tr>
              <tr><td>71</td><td>PRD-071</td><td>BBC</td><td class="text-end">151</td></tr>
              <tr><td>25</td><td>PRD-025</td><td>BBC</td><td class="text-end">381</td></tr>
              <tr><td>92</td><td>PRD-092</td><td>BBC</td><td class="text-end">46</td></tr>
              <tr><td>12</td><td>PRD-012</td><td>BBC</td><td class="text-end">446</td></tr>
              <tr><td>38</td><td>PRD-038</td><td>BBC</td><td class="text-end">316</td></tr>
              <tr><td>60</td><td>PRD-060</td><td>BBC</td><td class="text-end">206</td></tr>
              <tr><td>30</td><td>PRD-030</td><td>BBC</td><td class="text-end">356</td></tr>
              <tr><td>84</td><td>PRD-084</td><td>BBC</td><td class="text-end">86</td></tr>

              <tr><td>37</td><td>PRD-001</td><td>BBC</td><td class="text-end">312</td></tr>
              <tr><td>54</td><td>PRD-054</td><td>BBC</td><td class="text-end">236</td></tr>
              <tr><td>19</td><td>PRD-019</td><td>BBC</td><td class="text-end">411</td></tr>
              <tr><td>47</td><td>PRD-047</td><td>BBC</td><td class="text-end">271</td></tr>
              <tr><td>75</td><td>PRD-075</td><td>BBC</td><td class="text-end">131</td></tr>
              <tr><td>9</td><td>PRD-009</td><td>BBC</td><td class="text-end">461</td></tr>
              <tr><td>64</td><td>PRD-064</td><td>BBC</td><td class="text-end">186</td></tr>
              <tr><td>28</td><td>PRD-028</td><td>BBC</td><td class="text-end">366</td></tr>
              <tr><td>98</td><td>PRD-098</td><td>BBC</td><td class="text-end">16</td></tr>
              <tr><td>36</td><td>PRD-036</td><td>BBC</td><td class="text-end">326</td></tr>

              <tr><td>13</td><td>PRD-013</td><td>BBC</td><td class="text-end">441</td></tr>
              <tr><td>52</td><td>PRD-052</td><td>BBC</td><td class="text-end">247</td></tr>
              <tr><td>70</td><td>PRD-070</td><td>BBC</td><td class="text-end">156</td></tr>
              <tr><td>26</td><td>PRD-026</td><td>BBC</td><td class="text-end">376</td></tr>
              <tr><td>93</td><td>PRD-093</td><td>BBC</td><td class="text-end">41</td></tr>
              <tr><td>7</td><td>PRD-007</td><td>BBC</td><td class="text-end">471</td></tr>
              <tr><td>42</td><td>PRD-042</td><td>BBC</td><td class="text-end">296</td></tr>
              <tr><td>61</td><td>PRD-061</td><td>BBC</td><td class="text-end">201</td></tr>
              <tr><td>33</td><td>PRD-033</td><td>BBC</td><td class="text-end">341</td></tr>
              <tr><td>80</td><td>PRD-080</td><td>BBC</td><td class="text-end">106</td></tr>

              <tr><td>20</td><td>PRD-020</td><td>BBC</td><td class="text-end">406</td></tr>
              <tr><td>45</td><td>PRD-045</td><td>BBC</td><td class="text-end">281</td></tr>
              <tr><td>74</td><td>PRD-074</td><td>BBC</td><td class="text-end">136</td></tr>
              <tr><td>24</td><td>PRD-024</td><td>BBC</td><td class="text-end">386</td></tr>
              <tr><td>88</td><td>PRD-088</td><td>BBC</td><td class="text-end">66</td></tr>
              <tr><td>4</td><td>PRD-004</td><td>BBC</td><td class="text-end">487</td></tr>
              <tr><td>53</td><td>PRD-053</td><td>BBC</td><td class="text-end">241</td></tr>
              <tr><td>29</td><td>PRD-029</td><td>BBC</td><td class="text-end">361</td></tr>
              <tr><td>96</td><td>PRD-096</td><td>BBC</td><td class="text-end">26</td></tr>
              <tr><td>35</td><td>PRD-035</td><td>BBC</td><td class="text-end">331</td></tr>

              <tr><td>10</td><td>PRD-010</td><td>BBC</td><td class="text-end">456</td></tr>
              <tr><td>58</td><td>PRD-058</td><td>BBC</td><td class="text-end">216</td></tr>
              <tr><td>72</td><td>PRD-072</td><td>BBC</td><td class="text-end">146</td></tr>
              <tr><td>22</td><td>PRD-022</td><td>BBC</td><td class="text-end">396</td></tr>
              <tr><td>83</td><td>PRD-083</td><td>BBC</td><td class="text-end">91</td></tr>
              <tr><td>15</td><td>PRD-015</td><td>BBC</td><td class="text-end">431</td></tr>
              <tr><td>49</td><td>PRD-049</td><td>BBC</td><td class="text-end">261</td></tr>
              <tr><td>31</td><td>PRD-031</td><td>BBC</td><td class="text-end">351</td></tr>
              <tr><td>97</td><td>PRD-097</td><td>BBC</td><td class="text-end">21</td></tr>
              <tr><td>40</td><td>PRD-040</td><td>BBC</td><td class="text-end">306</td></tr>

              <tr><td>17</td><td>PRD-017</td><td>BBC</td><td class="text-end">421</td></tr>
              <tr><td>62</td><td>PRD-062</td><td>BBC</td><td class="text-end">196</td></tr>
              <tr><td>77</td><td>PRD-077</td><td>BBC</td><td class="text-end">121</td></tr>
              <tr><td>43</td><td>PRD-043</td><td>BBC</td><td class="text-end">291</td></tr>
              <tr><td>94</td><td>PRD-094</td><td>BBC</td><td class="text-end">36</td></tr>
              <tr><td>39</td><td>PRD-039</td><td>BBC</td><td class="text-end">311</td></tr>
              <tr><td>67</td><td>PRD-067</td><td>BBC</td><td class="text-end">171</td></tr>
              <tr><td>50</td><td>PRD-050</td><td>BBC</td><td class="text-end">256</td></tr>
              <tr><td>85</td><td>PRD-085</td><td>BBC</td><td class="text-end">81</td></tr>
              <tr><td>99</td><td>PRD-099</td><td>BBC</td><td class="text-end">11</td></tr>

              <tr><td>46</td><td>PRD-046</td><td>BBC</td><td class="text-end">276</td></tr>
              <tr><td>65</td><td>PRD-065</td><td>BBC</td><td class="text-end">181</td></tr>
              <tr><td>81</td><td>PRD-081</td><td>BBC</td><td class="text-end">101</td></tr>
              <tr><td>56</td><td>PRD-056</td><td>BBC</td><td class="text-end">226</td></tr>
              <tr><td>68</td><td>PRD-068</td><td>BBC</td><td class="text-end">166</td></tr>
              <tr><td>78</td><td>PRD-078</td><td>BBC</td><td class="text-end">116</td></tr>
              <tr><td>86</td><td>PRD-086</td><td>BBC</td><td class="text-end">76</td></tr>
              <tr><td>89</td><td>PRD-089</td><td>BBC</td><td class="text-end">61</td></tr>
              <tr><td>91</td><td>PRD-091</td><td>BBC</td><td class="text-end">51</td></tr>
              <tr><td>100</td><td>PRD-100</td><td>BBC</td><td class="text-end">6</td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- TOP SELL PRODUK -->
    <div class="col-md-6">
      <div class="card border-0 shadow-sm rounded-4">
        <div class="card-header bg-white fw-semibold d-flex justify-content-between align-items-center">
          <span>🥇 Top 100 Produk Terjual</span>
          <small class="text-muted">Last 365 Days</small>
        </div>
        <div class="card-body small">
          <table class="table table-sm table-hover table-striped mb-0 align-middle datatables1">
            <thead class="table-light">
              <tr>
                <th width="60">Rank</th>
                <th>Kode Produk</th>
                <th>Merek</th>
                <th class="text-end">Qty</th>
              </tr>
            </thead>
            <tbody>
              <tr><td><span class="badge bg-warning">1</span></td><td>PRD-001</td><td>BBC</td><td class="text-end">500</td></tr>
              <tr><td><span class="badge bg-warning">2</span></td><td>PRD-002</td><td>BBC</td><td class="text-end">495</td></tr>
              <tr><td><span class="badge bg-warning">3</span></td><td>PRD-003</td><td>BBC</td><td class="text-end">490</td></tr>
              <tr><td><span class="badge bg-secondary">4</span></td><td>PRD-004</td><td>BBC</td><td class="text-end">485</td></tr>
              <tr><td><span class="badge bg-secondary">5</span></td><td>PRD-005</td><td>BBC</td><td class="text-end">480</td></tr>
              <tr><td><span class="badge bg-secondary">6</span></td><td>PRD-006</td><td>BBC</td><td class="text-end">475</td></tr>
              <tr><td><span class="badge bg-secondary">7</span></td><td>PRD-007</td><td>BBC</td><td class="text-end">470</td></tr>
              <tr><td><span class="badge bg-secondary">8</span></td><td>PRD-008</td><td>BBC</td><td class="text-end">465</td></tr>
              <tr><td><span class="badge bg-secondary">9</span></td><td>PRD-009</td><td>BBC</td><td class="text-end">460</td></tr>
              <tr><td><span class="badge bg-secondary">10</span></td><td>PRD-010</td><td>BBC</td><td class="text-end">455</td></tr>

              <tr><td>11</td><td>PRD-011</td><td>BBC</td><td class="text-end">450</td></tr>
              <tr><td>12</td><td>PRD-012</td><td>BBC</td><td class="text-end">445</td></tr>
              <tr><td>13</td><td>PRD-013</td><td>BBC</td><td class="text-end">440</td></tr>
              <tr><td>14</td><td>PRD-014</td><td>BBC</td><td class="text-end">435</td></tr>
              <tr><td>15</td><td>PRD-015</td><td>BBC</td><td class="text-end">430</td></tr>
              <tr><td>16</td><td>PRD-016</td><td>BBC</td><td class="text-end">425</td></tr>
              <tr><td>17</td><td>PRD-017</td><td>BBC</td><td class="text-end">420</td></tr>
              <tr><td>18</td><td>PRD-018</td><td>BBC</td><td class="text-end">415</td></tr>
              <tr><td>19</td><td>PRD-019</td><td>BBC</td><td class="text-end">410</td></tr>
              <tr><td>20</td><td>PRD-020</td><td>BBC</td><td class="text-end">405</td></tr>

              <tr><td>21</td><td>PRD-021</td><td>BBC</td><td class="text-end">400</td></tr>
              <tr><td>22</td><td>PRD-022</td><td>BBC</td><td class="text-end">395</td></tr>
              <tr><td>23</td><td>PRD-023</td><td>BBC</td><td class="text-end">390</td></tr>
              <tr><td>24</td><td>PRD-024</td><td>BBC</td><td class="text-end">385</td></tr>
              <tr><td>25</td><td>PRD-025</td><td>BBC</td><td class="text-end">380</td></tr>
              <tr><td>26</td><td>PRD-026</td><td>BBC</td><td class="text-end">375</td></tr>
              <tr><td>27</td><td>PRD-027</td><td>BBC</td><td class="text-end">370</td></tr>
              <tr><td>28</td><td>PRD-028</td><td>BBC</td><td class="text-end">365</td></tr>
              <tr><td>29</td><td>PRD-029</td><td>BBC</td><td class="text-end">360</td></tr>
              <tr><td>30</td><td>PRD-030</td><td>BBC</td><td class="text-end">355</td></tr>

              <tr><td>31</td><td>PRD-031</td><td>BBC</td><td class="text-end">350</td></tr>
              <tr><td>32</td><td>PRD-032</td><td>BBC</td><td class="text-end">345</td></tr>
              <tr><td>33</td><td>PRD-033</td><td>BBC</td><td class="text-end">340</td></tr>
              <tr><td>34</td><td>PRD-034</td><td>BBC</td><td class="text-end">335</td></tr>
              <tr><td>35</td><td>PRD-035</td><td>BBC</td><td class="text-end">330</td></tr>
              <tr><td>36</td><td>PRD-036</td><td>BBC</td><td class="text-end">325</td></tr>
              <tr><td>37</td><td>PRD-037</td><td>BBC</td><td class="text-end">320</td></tr>
              <tr><td>38</td><td>PRD-038</td><td>BBC</td><td class="text-end">315</td></tr>
              <tr><td>39</td><td>PRD-039</td><td>BBC</td><td class="text-end">310</td></tr>
              <tr><td>40</td><td>PRD-040</td><td>BBC</td><td class="text-end">305</td></tr>

              <tr><td>41</td><td>PRD-041</td><td>BBC</td><td class="text-end">300</td></tr>
              <tr><td>42</td><td>PRD-042</td><td>BBC</td><td class="text-end">295</td></tr>
              <tr><td>43</td><td>PRD-043</td><td>BBC</td><td class="text-end">290</td></tr>
              <tr><td>44</td><td>PRD-044</td><td>BBC</td><td class="text-end">285</td></tr>
              <tr><td>45</td><td>PRD-045</td><td>BBC</td><td class="text-end">280</td></tr>
              <tr><td>46</td><td>PRD-046</td><td>BBC</td><td class="text-end">275</td></tr>
              <tr><td>47</td><td>PRD-047</td><td>BBC</td><td class="text-end">270</td></tr>
              <tr><td>48</td><td>PRD-048</td><td>BBC</td><td class="text-end">265</td></tr>
              <tr><td>49</td><td>PRD-049</td><td>BBC</td><td class="text-end">260</td></tr>
              <tr><td>50</td><td>PRD-050</td><td>BBC</td><td class="text-end">255</td></tr>

              <tr><td>51</td><td>PRD-051</td><td>BBC</td><td class="text-end">250</td></tr>
              <tr><td>52</td><td>PRD-052</td><td>BBC</td><td class="text-end">245</td></tr>
              <tr><td>53</td><td>PRD-053</td><td>BBC</td><td class="text-end">240</td></tr>
              <tr><td>54</td><td>PRD-054</td><td>BBC</td><td class="text-end">235</td></tr>
              <tr><td>55</td><td>PRD-055</td><td>BBC</td><td class="text-end">230</td></tr>
              <tr><td>56</td><td>PRD-056</td><td>BBC</td><td class="text-end">225</td></tr>
              <tr><td>57</td><td>PRD-057</td><td>BBC</td><td class="text-end">220</td></tr>
              <tr><td>58</td><td>PRD-058</td><td>BBC</td><td class="text-end">215</td></tr>
              <tr><td>59</td><td>PRD-059</td><td>BBC</td><td class="text-end">210</td></tr>
              <tr><td>60</td><td>PRD-060</td><td>BBC</td><td class="text-end">205</td></tr>

              <tr><td>61</td><td>PRD-061</td><td>BBC</td><td class="text-end">200</td></tr>
              <tr><td>62</td><td>PRD-062</td><td>BBC</td><td class="text-end">195</td></tr>
              <tr><td>63</td><td>PRD-063</td><td>BBC</td><td class="text-end">190</td></tr>
              <tr><td>64</td><td>PRD-064</td><td>BBC</td><td class="text-end">185</td></tr>
              <tr><td>65</td><td>PRD-065</td><td>BBC</td><td class="text-end">180</td></tr>
              <tr><td>66</td><td>PRD-066</td><td>BBC</td><td class="text-end">175</td></tr>
              <tr><td>67</td><td>PRD-067</td><td>BBC</td><td class="text-end">170</td></tr>
              <tr><td>68</td><td>PRD-068</td><td>BBC</td><td class="text-end">165</td></tr>
              <tr><td>69</td><td>PRD-069</td><td>BBC</td><td class="text-end">160</td></tr>
              <tr><td>70</td><td>PRD-070</td><td>BBC</td><td class="text-end">155</td></tr>

              <tr><td>71</td><td>PRD-071</td><td>BBC</td><td class="text-end">150</td></tr>
              <tr><td>72</td><td>PRD-072</td><td>BBC</td><td class="text-end">145</td></tr>
              <tr><td>73</td><td>PRD-073</td><td>BBC</td><td class="text-end">140</td></tr>
              <tr><td>74</td><td>PRD-074</td><td>BBC</td><td class="text-end">135</td></tr>
              <tr><td>75</td><td>PRD-075</td><td>BBC</td><td class="text-end">130</td></tr>
              <tr><td>76</td><td>PRD-076</td><td>BBC</td><td class="text-end">125</td></tr>
              <tr><td>77</td><td>PRD-077</td><td>BBC</td><td class="text-end">120</td></tr>
              <tr><td>78</td><td>PRD-078</td><td>BBC</td><td class="text-end">115</td></tr>
              <tr><td>79</td><td>PRD-079</td><td>BBC</td><td class="text-end">110</td></tr>
              <tr><td>80</td><td>PRD-080</td><td>BBC</td><td class="text-end">105</td></tr>

              <tr><td>81</td><td>PRD-081</td><td>BBC</td><td class="text-end">100</td></tr>
              <tr><td>82</td><td>PRD-082</td><td>BBC</td><td class="text-end">95</td></tr>
              <tr><td>83</td><td>PRD-083</td><td>BBC</td><td class="text-end">90</td></tr>
              <tr><td>84</td><td>PRD-084</td><td>BBC</td><td class="text-end">85</td></tr>
              <tr><td>85</td><td>PRD-085</td><td>BBC</td><td class="text-end">80</td></tr>
              <tr><td>86</td><td>PRD-086</td><td>BBC</td><td class="text-end">75</td></tr>
              <tr><td>87</td><td>PRD-087</td><td>BBC</td><td class="text-end">70</td></tr>
              <tr><td>88</td><td>PRD-088</td><td>BBC</td><td class="text-end">65</td></tr>
              <tr><td>89</td><td>PRD-089</td><td>BBC</td><td class="text-end">60</td></tr>
              <tr><td>90</td><td>PRD-090</td><td>BBC</td><td class="text-end">55</td></tr>

              <tr><td>91</td><td>PRD-091</td><td>BBC</td><td class="text-end">50</td></tr>
              <tr><td>92</td><td>PRD-092</td><td>BBC</td><td class="text-end">45</td></tr>
              <tr><td>93</td><td>PRD-093</td><td>BBC</td><td class="text-end">40</td></tr>
              <tr><td>94</td><td>PRD-094</td><td>BBC</td><td class="text-end">35</td></tr>
              <tr><td>95</td><td>PRD-095</td><td>BBC</td><td class="text-end">30</td></tr>
              <tr><td>96</td><td>PRD-096</td><td>BBC</td><td class="text-end">25</td></tr>
              <tr><td>97</td><td>PRD-097</td><td>BBC</td><td class="text-end">20</td></tr>
              <tr><td>98</td><td>PRD-098</td><td>BBC</td><td class="text-end">15</td></tr>
              <tr><td>99</td><td>PRD-099</td><td>BBC</td><td class="text-end">10</td></tr>
              <tr><td>100</td><td>PRD-100</td><td>BBC</td><td class="text-end">5</td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

 













  </div>



</div>
</section>
</div>

<?php include "4footer.php"; ?>

<script>

const ctx = document.getElementById('keuanganChart').getContext('2d');

// contoh label 1 bulan terakhir
const labels = [];
const now = new Date();

for (let i = 12; i >= 0; i--) {
  let d = new Date(now.getFullYear(), now.getMonth() - i, 1);

  let bulan = d.toLocaleString('id-ID', { month: 'short' });
  let tahun = d.getFullYear();

  labels.push(bulan + " " + tahun);
}

console.log(labels);

// contoh data (ganti dengan data asli dari database)
const dataPenjualan = [1200000,1500000,1700000,1400000,1800000,2000000,
  1200000,1500000,1700000,1400000,1800000,2000000,2100000];
const dataBiaya = [500000,600000,550000,650000,700000,750000,
  500000,600000,550000,650000,700000,750000,720000];
const dataLaba = dataPenjualan.map((p,i)=> p - dataBiaya[i]);

const keuanganChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [
        {
            label: 'Bruto',
            data: dataPenjualan,
            backgroundColor: 'rgba(40,167,69,0.8)'
        },
        {
            label: 'Biaya Operasional',
            data: dataBiaya,
            backgroundColor: 'rgba(220,53,69,0.8)'
        },
        {
            label: 'Net Margin',
            data: dataLaba,
            backgroundColor: 'rgba(0,123,255,0.8)'
        }
        ]
    },
    options: {
        responsive:true,
        plugins:{
            legend:{
                position:'top'
            },
            title:{
                display:false,
                text:'Perbandingan Keuangan 1 Bulan Terakhir'
            }
        },
        scales:{
            y:{
                beginAtZero:true
            }
        }
    }
});

</script>
<?php include "5script.php"; ?>