<!-- Data Table  -->
<div class="container">
  <!--  <div class="alert alert-success" role="alert">The cryptocurrency list below will be updated in real time and shows you the Top 50 crypto gainers for today.</div>
        -->
  <div class="row justify-content-center">
    <div class="col-md-12 text-left">
      <div class="py-2">
        <table id="coins-info-table" class="table table-striped table-bordered table-dark  dt-responsive wrap" cellspacing="0" width="100%">
          <thead>
            <tr class="top-hang">
              <th class="fs-6">#</th>
              <th class="fs-6">Name</th>
              <th class="fs-6">Price</th>
              <th class="fs-6">Market Cap</th>
              <th class="fs-6">Liquidity</th>
              <th class="fs-6">Volume (24H)</th>
              <th class="fs-6">Change (1H)</th>
              <th class="fs-6">Change (24H)</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $cnt = 0;
            setlocale(LC_MONETARY, "en_US");

            foreach ($coinMkcapDesSort as $key => $value) {
              /* 
					   
                         if ($coinChange1[$key] < 0) continue;  
                          */
              if ($cnt > 999) continue;
              if (($coinUsdVolume[$key] / $convertRate) < 1400) continue;
              if ($coinSupply[$key] < 500) continue;
              if ($coinMkcap[$key] < 10) continue;


            ?>
              <tr class="change-color mt-1 ">
                <!-- <td class="fs-6"><!?php echo $cnt + 1; //echo $coinRank[$key];?></td> -->
                <?php if (isset($coinAddress)) { ?>
                  <td>
                    <img src="<?php echo $coinLink[$key] ?>">
                    <a href="<?php echo base_url() ?>coins/<?php echo strtolower(str_replace(' ', '-', $coinAdress[$key])); ?>">
                    <span class="coin-name"><?php echo $coinName[$key]; ?></span></a> 
                    <span class="badge badge-warning"><?php echo $coinCode[$key]; ?></span>
                </td>
                <?php  } else { ?>
                  <td>
                    <img src="<?php echo $coinLink[$key] ?>">
                    <a href="<?php echo base_url() ?>coin/<?php echo strtolower(str_replace(' ', '-', $coinName[$key])); ?>">
                    <span class="coin-name"><?php echo $coinName[$key]; ?></span>
                    </a> 
                    <span class="badge badge-warning"><?php echo $coinCode[$key]; ?></span></td>
                <?php  } ?>

                <!-- Current -->
                <td class="fs-6" data-sort="<?php echo $coinPrice[$key]; ?>">
                <span class="price" id="BTC_<?php echo strtolower($coinName[$key]); ?>">
                <?php echo strtok($convertSymbol, " "); ?><?php echo custom_prc_format($coinPrice[$key] / $convertRate); ?></span>
                </td>


                <td class="fs-6" data-sort="<?php echo $coinMkcap[$key]; ?>">
                <?php echo strtok($convertSymbol, " "); ?><?php echo custom_number_format($coinMkcap[$key] / $convertRate); ?></td>

                <td class="fs-6" data-sort="<?php echo $coinSupply[$key]; ?>"><?php echo custom_number_format($coinSupply[$key]); ?> </td>

                <td class="fs-6" data-sort="<?php echo $coinUsdVolume[$key]; ?>">
                <?php echo strtok($convertSymbol, " "); ?><?php echo custom_number_format($coinUsdVolume[$key] / $convertRate); ?></td>
                
                <td class="fs-6" data-sort="<?php echo $coinChange1[$key]; ?>">
                  
                
                <?php if ($coinChange1[$key] > 0) { ?>
                    <span class="p-up"><i class="fa fa-caret-up"></i> <?php echo round($coinChange1[$key], 2); ?>%</span>
                </td>
              <?php } else { ?>
                <span class="p-down"><i class="fa fa-caret-down"></i> <?php echo round($coinChange1[$key], 2); ?>%</span></td>
              <?php } ?>
              <td class="fs-6" data-sort="<?php echo $coinChange24[$key]; ?>">

                <?php if ($coinChange24[$key] > 0) { ?>
                  <span class="p-up"><i class="fa fa-caret-up"></i> <?php echo round($coinChange24[$key], 2); ?>%</span>
              </td>
            <?php } else { ?>
              <span class="p-down"><i class="fa fa-caret-down"></i> <?php echo round($coinChange24[$key], 2); ?>%</span></td>
            <?php } ?>
              </tr>

            <?php ++$cnt;
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

































<!-- Data Table  -->
<div class="container">
  <!--  <div class="alert alert-success" role="alert">The cryptocurrency list below will be updated in real time and shows you the Top 50 crypto gainers for today.</div>
        -->
  <div class="row justify-content-center">
    <div class="col-md-12 text-left">
      <div class="py-2">
        <table id="coins-info-table" class="table table-striped table-bordered table-dark  dt-responsive wrap" cellspacing="0" width="100%">
          <thead>
            <tr class="top-hang">
              <th class="fs-6">#</th>
              <th class="fs-6">Name</th>
              <th class="fs-6">Price</th>
              <th class="fs-6">Market Cap</th>
              <th class="fs-6">Liquidity</th>
              <th class="fs-6">Volume (24H)</th>
              <th class="fs-6">Change (1H)</th>
              <th class="fs-6">Change (24H)</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $cnt = 0;
            setlocale(LC_MONETARY, "en_US");

            foreach ($coinMkcapDesSort as $key => $value) {
              /* 
					   
                         if ($coinChange1[$key] < 0) continue;  
                          */
              if ($cnt > 999) continue;
              if (($coinUsdVolume[$key] / $convertRate) < 1400) continue;
              if ($coinSupply[$key] < 500) continue;
              if ($coinMkcap[$key] < 10) continue;


            ?>
              <tr class="change-color mt-1 ">
                <!-- <td class="fs-6"><!?php echo $cnt + 1; //echo $coinRank[$key];?></td> -->
                <?php if (isset($coinAddress)) { ?>
                  <td>
                    <img src="<?php echo $coinLink[$key] ?>">
                    <a href="<?php echo base_url() ?>coins/<?php echo strtolower(str_replace(' ', '-', $coinAdress[$key])); ?>">
                    <span class="coin-name"><?php echo $coinName[$key]; ?></span></a> 
                    <span class="badge badge-warning"><?php echo $coinCode[$key]; ?></span>
                </td>
                <?php  } else { ?>
                  <td>
                    <img src="<?php echo $coinLink[$key] ?>">
                    <a href="<?php echo base_url() ?>coin/<?php echo strtolower(str_replace(' ', '-', $coinName[$key])); ?>">
                    <span class="coin-name"><?php echo $coinName[$key]; ?></span>
                    </a> 
                    <span class="badge badge-warning"><?php echo $coinCode[$key]; ?></span></td>
                <?php  } ?>

                <!-- Current -->
                <td class="fs-6" data-sort="<?php echo $coinPrice[$key]; ?>">
                <span class="price" id="BTC_<?php echo strtolower($coinName[$key]); ?>">
                <?php echo strtok($convertSymbol, " "); ?><?php echo custom_prc_format($coinPrice[$key] / $convertRate); ?></span>
                </td>


                <td class="fs-6" data-sort="<?php echo $coinMkcap[$key]; ?>">
                <?php echo strtok($convertSymbol, " "); ?><?php echo custom_number_format($coinMkcap[$key] / $convertRate); ?></td>

                <td class="fs-6" data-sort="<?php echo $coinSupply[$key]; ?>"><?php echo custom_number_format($coinSupply[$key]); ?> </td>

                <td class="fs-6" data-sort="<?php echo $coinUsdVolume[$key]; ?>">
                <?php echo strtok($convertSymbol, " "); ?><?php echo custom_number_format($coinUsdVolume[$key] / $convertRate); ?></td>
                
                <td class="fs-6" data-sort="<?php echo $coinChange1[$key]; ?>">
                  
                
                <?php if ($coinChange1[$key] > 0) { ?>
                    <span class="p-up"><i class="fa fa-caret-up"></i> <?php echo round($coinChange1[$key], 2); ?>%</span>
                </td>
              <?php } else { ?>
                <span class="p-down"><i class="fa fa-caret-down"></i> <?php echo round($coinChange1[$key], 2); ?>%</span></td>
              <?php } ?>
              <td class="fs-6" data-sort="<?php echo $coinChange24[$key]; ?>">

                <?php if ($coinChange24[$key] > 0) { ?>
                  <span class="p-up"><i class="fa fa-caret-up"></i> <?php echo round($coinChange24[$key], 2); ?>%</span>
              </td>
            <?php } else { ?>
              <span class="p-down"><i class="fa fa-caret-down"></i> <?php echo round($coinChange24[$key], 2); ?>%</span></td>
            <?php } ?>
              </tr>

            <?php ++$cnt;
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- End Data Table  -->