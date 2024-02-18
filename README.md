<h1><strong>TechImprovement_StateRemoval Module for Magento 2 </strong></h1>
<h2><strong>Introduction</strong></h2>
<p>The <code><strong>TechImprovement_StateRemoval</strong></code> module allows you to hide selected US states from the checkout and customer address options in Magento 2 stores. This can be useful for stores that do not ship to certain states or want to simplify their checkout process.</p>
<h2><strong>Features</strong></h2>
<ul>
<li data-sourcepos="7:1-7:52">Enable or disable the module from the admin panel.</li>
<li data-sourcepos="8:1-9:0">Select specific US states to hide from the frontend.</li>
</ul>
<h2><strong>Installation</strong></h2>
<h3><strong>Via Composer</strong></h3>
<ol>
<li>Run <span style="font-size: 14px;"><strong><code>composer require techimprovement/module-state-removal</code></strong></span> to add the module to your project.</li>
<li>Enable the module by running <strong><span style="font-size: 14px;"><code>php bin/magento module:enable TechImprovement_StateRemoval</code></span>.</strong></li>
<li>Run <span style="font-size: 14px;"><strong><code>php bin/magento setup:upgrade</code></strong></span> to install the module.</li>
<li>Deploy static content (if necessary) with <strong><span style="font-size: 14px;"><code>php bin/magento setup:static-content:deploy</code></span>.</strong></li>
</ol>
<h3><strong>Manually</strong></h3>
<ol>
<li>Create the following directory structure in your Magento installation: <strong><code><span style="font-size: 14px;">app/code/TechImprovement/StateRemoval</span></code>.</strong></li>
<li>Upload the module files to the newly created directory.</li>
<li>Run <strong><code><span style="font-size: 14px;">php bin/magento module:enable TechImprovement_StateRemoval</span></code></strong> from the Magento root directory.</li>
<li>Run <strong><code><span style="font-size: 14px;">php bin/magento setup:upgrade</span></code></strong> to install the module.</li>
<li>Deploy static content (if necessary) with <span style="font-size: 14px;"><strong><code>php bin/magento setup:static-content:deploy</code></strong>.</span></li>
</ol>
<h2><strong>Configuration</strong></h2>
<ol>
<li>Navigate to <code>Stores -&gt; Configuration -&gt; TechImprovement -&gt; Hide US States</code> in the Magento Admin Panel. Enable the module and select the states you want to hide.</li>
</ol>
<h2><strong>Usage</strong></h2>
<p>Once configured, the selected states will no longer be visible in the state/region dropdowns on the frontend of your Magento store during checkout and customer address management.</p>
<h2><strong>Enable/Disable Module</strong></h2>
<p>To enable or disable the module, use the following CLI commands:</p>
<ul>
<li>Enable: <span style="font-size: 14px;"><strong><code>php bin/magento module:enable TechImprovement_StateRemoval</code></strong></span></li>
<li>Disable:<strong> <span style="font-size: 14px;"><code>php bin/magento module:disable TechImprovement_StateRemoval</code></span></strong></li>
</ul>
<p>After enabling or disabling, always run <code>php bin/magento setup:upgrade</code> and clear the cache.</p>
<h2><strong>Support</strong></h2>
<p>For any issues or questions regarding the module, please contact support at <a title="info@techimprovement.net" href="mailto:info@techimprovement.net">info@techimprovement.net</a>.</p>
<h2><strong>Author</strong></h2>
<p>This module is brought to you by <strong>TechImprovement Inc</strong>, a provider of Magento extensions and custom eCommerce solutions.</p>

## Support Our Project

<p>If you find this project helpful, consider supporting us with a donation by clicking this button <a href="https://paypal.me/AnduelHoxha?country.x=US&locale.x=en_US"><img width="150" src="Donate-button.png"></a> or scan the QR code below:</p>

![Donate QR Code](qrcode.png)
