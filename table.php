<!-- Section 2 Table Data -->
<div class="section-2">
        <div class="configuration-container">
            <a class="rows-selector">
                <p>Show rows:</p>
                <select>
                    <option value="10" selected>10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </a>
            <input class="data-table-searcher" type="text" placeholder="Search term...">
        </div>

        <div class="coins-data-table-wrapper">
            <table id="coins-data-table">
                <thead>
                    <tr>
                        <th class="text-left">Name</th>
                        <th class="text-right">Price</th>
                        <th class="text-right">Market Cap</th>
                        <th class="text-right">Liquidity</th>
                        <th class="text-right">Volume (24h)</th>
                        <th class="text-right">Change (1h)</th>
                        <th class="text-right">Change (24h)</th>
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
                    <tr>
                        <?php if (isset($coinAddress)) { ?>
                        <td class="text-right">
                            <a href="<?php echo base_url() ?>coins/<?php echo strtolower(str_replace(' ', '-', $coinAdress[$key])); ?>" target="_blank" class="coin-brand">
                               <img alt="<?php echo $coinName[$key]; ?>" src="<?php echo $coinLink[$key] ?>"> 
                               <?php echo $coinName[$key]; ?> 
                               <span><?php echo $coinCode[$key]; ?></span>
                            </a>
                        </td>
                        <?php } else { ?>
                        <td>
                            <a href="<?php echo base_url() ?>coin/<?php echo strtolower(str_replace(' ', '-', $coinName[$key])); ?>" target="_blank" class="coin-brand">
                               <img alt="<?php echo $coinName[$key]; ?>" src="<?php echo $coinLink[$key] ?>"> 
                               <?php echo $coinName[$key]; ?> 
                               <span><?php echo $coinCode[$key]; ?></span>
                            </a>
                        </td>
                        <?php } ?>

                        <td class="text-right" id="BTC_<?php echo strtolower($coinName[$key]); ?>">
                            <?php echo strtok($convertSymbol, " "); ?>
                            <?php echo custom_prc_format($coinPrice[$key] / $convertRate); ?>
                        </td>

                        <td class="text-right">
                            <?php echo strtok($convertSymbol, " "); ?>
                            <?php echo custom_number_format($coinMkcap[$key] / $convertRate); ?>
                        </td>

                        <td class="text-right">
                            <?php echo custom_number_format($coinSupply[$key]); ?>
                        </td>

                        <td class="text-right">
                            <?php echo strtok($convertSymbol, " "); ?>
                            <?php echo custom_number_format($coinUsdVolume[$key] / $convertRate); ?>
                        </td>

                        <td class="text-right">
                        <?php if ($coinChange1[$key] > 0) { ?>
                            <span class="success"><i class="fa fa-caret-up"></i> <?php echo round($coinChange1[$key], 2); ?>%</span>
                            
                        <?php } else { ?>
                            <span class="danger"><i class="fa fa-caret-down"></i> <?php echo round($coinChange1[$key], 2); ?>%</span>
                        <?php } ?>
                        </td>
                        
                        <td class="text-right">
                        <?php if ($coinChange24[$key] > 0) { ?>
                            <span class="success"><i class="fa fa-caret-up"></i> <?php echo round($coinChange24[$key], 2); ?>%</span>
                        
                        <?php } else { ?>
                            <span class="danger"><i class="fa fa-caret-down"></i> <?php echo round($coinChange24[$key], 2); ?>%</span>
                        <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="navigation-container">
            <button disabled><i class="fas fa-chevron-left"></i></button>
            <button class="active">1</button>
            <button>2</button>
            <button>3</button>
            <span>...</span>
            <button>10</button>
            <button><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>