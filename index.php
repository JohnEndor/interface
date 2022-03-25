<?php
$algo = user()->getState('yaamp-algo');

JavascriptFile("/extensions/jqplot/jquery.jqplot.js");
JavascriptFile("/extensions/jqplot/plugins/jqplot.dateAxisRenderer.js");
JavascriptFile("/extensions/jqplot/plugins/jqplot.barRenderer.js");
JavascriptFile("/extensions/jqplot/plugins/jqplot.highlighter.js");
JavascriptFile("/extensions/jqplot/plugins/jqplot.cursor.js");
JavascriptFile('/yaamp/ui/js/auto_refresh.js');

$height = '240px';

$min_payout = floatval(YAAMP_PAYMENTS_MINI);
$min_sunday = $min_payout / 10;

$payout_freq = (YAAMP_PAYMENTS_FREQ / 3600) . " hours";
?>

<div id='resume_update_button' style='color: #ffffff; background-color: #41464b; border: 1px solid #7d7d7d;
    padding: 10px; margin-left: 20px; margin-right: 20px; margin-top: 15px; cursor: pointer; display: none;'
    onclick='auto_page_resume();' align=center>
    <b>Auto Refresh Is Paused - Click Here To Resume</b></div>
</br>
<div style="height:38px; background-color: #352f2f; overflow:hidden; box-sizing: border-box; border: 1px solid #352f2f; border-radius: 4px; text-align: right; line-height:14px; block-size:38px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #352f2f;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=dark&pref_coin_id=1505&invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div></div>




<table cellspacing=20 width=100%>
<tr><td valign=top width=50%>

<!--  -->

<div class="main-left-box">
<div class="main-left-title">Miners Power Technologies</div>
<div class="main-left-inner">

<center>
<ul>
<li><a href="https://powerminers.tech"><img src='/images/logo_power.png' /></a></li>
<li><b>Welcome to PowerMiners!</b></li>
<li>&nbsp;</li>
<li><b>Low Fee Commission, Solo - Share Mining, Fast Payments</b></li>
<li>Our Support: powerminers.tech@gmail.com</a></li>
<li>&nbsp;</li>
<li>No registration is required, we do payouts in the currency you mine. Use your wallet address as the username.</li>
<li>&nbsp;</li>
<li>Payouts are made automatically every hour (minimum: 0.01*)</li>
<li>For some coins, there is an initial delay before the first payout, please wait at least 6 hours before asking for support.</li>
<li>Blocks are distributed proportionally among valid submitted shares.</li>
<br><br><br>
<li>* Information about coins is updated every day.</li>
<br/>
</ul>
</div></div>
</center>





<br/>

<!-- Stratum Auto generation code, will automatically add coins when they are enabled and auto ready -->

<div class="main-left-box">
<div class="main-left-title">How to mine with powerminers.tech</div>
<div class="main-left-inner">

<center><table>
	<thead>
		<tr>
			<th>Stratum Location</th>
			<th>Choose Coin</th>
			<th>Your Wallet Address</th>
			<th>Rig (opt.)</th>
                        <th>Solo Mine</th>
                        <th>Start Mining</th>
		</tr>
	</thead>

<tbody>
	<tr>
		<td>
			<select id="drop-stratum" colspan="2" style="min-width: 140px; border-style:solid; padding: 3px; font-family: monospace; border-radius: 5px;">

<!-- Add your stratum locations here -->
			<option value="">PowerMiners</option>
			<!-- <option value="us.west.">USA</option>
			<option value="aus.">AUS Stratum</option>
			<option value="cad.">CAD Stratum</option>
			<option value="uk.">UK Stratum</option> -->
		</select>
	</td>

	<td>
			<select id="drop-coin" style="border-style:solid; padding: 3px; font-family: monospace; border-radius: 5px;">
                   <option disabled=''>yescryptR16<option data-port='4220' data-algo='-a yescryptR16' data-symbol='REAN'>ReaCoin (REAN)</option>
                   
                   <option disabled=''>0x10<option data-port='6841' data-algo='-a 0x10' data-symbol='CHOX'>ChainOX (CHOX)</option>
                   
                   <option disabled=''>scrypt<option data-port='7508' data-algo='-a scrypt' data-symbol='CJN'>Cojin (CJN)</option>
                   <option data-port='4442' data-algo='-a scrypt' data-symbol='MBRO'>MbroCoin (MBRO)</option>
                   
                   <option disabled=''>x16rv2<option data-port='7396' data-algo='-a x16rv2' data-symbol='REDE'>RedeCoin (REDE)</option>
                   
                   
               </td>

		<td>

<!-- Change your demo wallet here -->
			<input id="text-wallet" type="text" size="35" placeholder="YOUR COIN ADDRESS" style="border-style:solid; border-width: thin; padding: 3px; font-family: monospace; border-radius: 5px;">
		</td>

		<td>
			<input id="text-rig-name" type="text" size="10" placeholder="001" style="border-style:solid; border-width: thin; padding: 3px; font-family: monospace; border-radius: 5px;">
		</td>

	        <td>
			<select id="drop-solo" colspan="2" style="min-width: 80px; border-style:solid; padding: 3px; font-family: monospace; border-radius: 5px;">
			<option value="">No</option>
			<option value=",m=solo">Yes</option>
			</select>
		</td>

		<td>
			<input id="Generate!" type="button" value="Create String" onclick="generate()" style="border-style:solid; padding: 3px; font-family: monospace; border-radius: 5px;">
		</td>
	</tr>
	<tr>
			<td colspan="7"><p class="main-left-box" style="padding: 3px; color: #000000; background-color: #ffffff; font-family: monospace;" id="output">-a  -o stratum+tcp://powerminers.tech:0000 -u . -p c=</p>
		</td>
	</tr>
</tbody></table>

<ul>
<li><b>Your WALLET ADDRESS must be valid for the currency you mine !</b></li>
<li><b>DO NOT USE a BTC address here, automatic exchange is not currently supported !</b></li>
<li>See the "powerminers.tech Coins" area on the right for PORT numbers. You may mine any coin regardless if the coin is enabled or not for autoexchange. Payouts will only be made in that coins currency.</li>

<br>
</ul>
</div></div></center><br>

<!-- End new stratum generation code  -->

<div class="main-left-box">
<div class="main-left-title">Download miners:</div>
<div class="main-left-inner">
<li>CCMiner Reacoin (NVIDIA GPU) - <a target="_blank" href='https://github.com/rplant8/cpuminer-opt-rplant/releases/download/ccminer/ccminer-win-cuda10.zip' target="_blank">Download</a></li>    
<li>SRBMiner (CPU,AMD GPU) - <a target="_blank" href='https://github.com/doktor83/SRBMiner-Multi' target="_blank">Download</a></li>
<li>Z-Enemy (NVIDIA GPU) - <a target="_blank" href='https://github.com/zealot-rvn/z-enemy/releases' target="_blank">Download</a></li>
<li>CPUminer Rplant (CPU) - <a target="_blank" href='https://github.com/rplant8/cpuminer-opt-rplant/releases' target="_blank">Download</a></li>
<li>TRex (NVIDA GPU) - <a target="_blank" href='https://github.com/trexminer/T-Rex/releases' target="_blank">Download</a></li>
<li>TeamRedMiner (AMD GPU) - <a target="_blank" href='https://github.com/todxx/teamredminer/releases' target="_blank">Download</a></li>
<li>Xmrig (CPU,AMD/NVIDA GPU) - <a target="_blank" href='https://github.com/xmrig/xmrig/releases' target="_blank">Download</a></li>
<li>WildRig Multi (AMD/NVIDIA GPU) - <a target="_blank" href='https://github.com/andru-kun/wildrig-multi/releases' target="_blank">Download</a></li>
<li>Cryptodrege (NVIDA GPU) - <a target="_blank" href='https://cryptodredge.org/get/' target="_blank">Download</a></li>
<li>LolMiner (AMD/NVIDA GPU) - <a target="_blank" href='https://github.com/Lolliedieb/lolMiner-releases/releases' target="_blank">Download</a></li>
</div></div><br>


<div class="main-left-box">
<div class="main-left-title">Powerminers.tech links:</div>
<div class="main-left-inner">

<ul>
<li><b>Whattomine</b> - <a href='https://whattomine.com/'>Mining calculator</a></li>
<li><b>Minerstat</b> - <a href='https://minerstat.com/mining-calculator'>Mining calculator</a></li>
<li><b>Nicehash</b> - <a href='https://www.nicehash.com/'>Rent Power</a></li>
<li><b>Miningrigrentals</b> - <a href='https://www.miningrigrentals.com/'>Rent Power</a></li>
<li><b>MiningPoolStats</b> - <a href='https://miningpoolstats.stream/'>Pool statistics</a></li>
<?php
if (YIIMP_PUBLIC_BENCHMARK):
?>
<li><b>Benchmarks</b> - <a href='/site/benchmarks'>http://<?=YAAMP_SITE_URL
?>/site/benchmarks</a></li>
<?php
endif;
?>

<?php
if (YAAMP_ALLOW_EXCHANGE):
?>
<li><b>Algo Switching</b> - <a href='/site/multialgo'>http://<?=YAAMP_SITE_URL
?>/site/multialgo</a></li>
<?php
endif;
?>

<br>

</ul>
</div></div><br>

<div class="main-left-box">
<div class="main-left-title">PowerMiners new coin:</div>
<div class="main-left-inner">

<ul>
<li><a href="https://powerminers.tech"><img src='/images/money.png' /></a></li>  
     
 


</ul>

</div></div><br>
</td><td valign=top>
<!--  -->

<div id='pool_current_results'>
<br><br><br><br><br><br><br><br><br><br>
</div>

<div id='pool_history_results'>
<br><br><br><br><br><br><br><br><br><br>
</div>

</td></tr></table>

<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>

<script>

function page_refresh()
{
    pool_current_refresh();
    pool_history_refresh();
}

function select_algo(algo)
{
    window.location.href = '/site/algo?algo='+algo+'&r=/';
}

////////////////////////////////////////////////////

function pool_current_ready(data)
{
    $('#pool_current_results').html(data);
}

function pool_current_refresh()
{
    var url = "/site/current_results";
    $.get(url, '', pool_current_ready);
}

////////////////////////////////////////////////////

function pool_history_ready(data)
{
    $('#pool_history_results').html(data);
}

function pool_history_refresh()
{
    var url = "/site/history_results";
    $.get(url, '', pool_history_ready);
}

</script>

<script>
function getLastUpdated(){
    var stratum = document.getElementById('drop-stratum');
    var coin = document.getElementById('drop-coin');
    var solo = document.getElementById('drop-solo');
    var rigName = document.getElementById('text-rig-name').value;
    var result = '';

    result += coin.options[coin.selectedIndex].dataset.algo + ' -o stratum+tcp://';
    result += stratum.value + 'powerminers.tech:';
    result += coin.options[coin.selectedIndex].dataset.port + ' -u ';
    result += document.getElementById('text-wallet').value;
    if (rigName) result += '.' + rigName;
    result += ' -p c=';
    result += coin.options[coin.selectedIndex].dataset.symbol + solo.value;
    return result;
}
function generate(){
      var result = getLastUpdated()
        document.getElementById('output').innerHTML = result;
}
generate();
</script>
