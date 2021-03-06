<?php 
//print_debug($availableAtStores, __FILE__, __LINE__, 0);
?>
<div id="pdavil" class="subheadingholder prodheadingholder">
    <h2>AVAILABLE AT STORES (<?php echo count($availableAtStores); ?>):</h2>
    <span class="right"> 
        <a href="#" class="savepdf">Save PDF</a>
        <a href="#" class="savesearch">Save Search</a>
    </span>
</div>
<div class="prodsubbox">
    <div class="shortholder">
        <div class="showing">
            Showing: 
            <select>
                <option>1</option>
                <option>2</option>
            </select>
            per page
        </div>
        <div class="sortright">
            Sort By: 
            <select>
                <option>Availability</option>
            </select>
        </div>
        <div class="sortright">
            Filter Area: 
            <select>
                <option>All Areas</option>
            </select>
        </div>
        <div class="sortright">
            Sort By: 
            <select>
                <option>Price Low-High</option>
            </select>
        </div>
    </div>
    <div class="proddbox">
        
        <div class="frow row">
            <a href="javascript:void(0)" class="prodsubarrow"></a>
            <img src="<?php echo base_url(); ?>assets/<?php echo $this->config->item('themeCode'); ?>/images/prodthumb2.jpg" alt=""  />
        </div>
        <div class="srow row">
            <h2>CHROMA DIGITAL STORE</h2>
            <p class="locationbor"><span class="locationbox">Viman Nagar ( 2 Km )</span>
                <span class="starholder">
                    <a href="#"><img src="<?php echo base_url(); ?>assets/<?php echo $this->config->item('themeCode'); ?>/images/star.jpg" alt=""></a>
                    <a href="#"><img src="<?php echo base_url(); ?>assets/<?php echo $this->config->item('themeCode'); ?>/images/star.jpg" alt=""></a>
                    <a href="#"><img src="<?php echo base_url(); ?>assets/<?php echo $this->config->item('themeCode'); ?>/images/star.jpg" alt=""></a>
                    <a href="#"><img src="<?php echo base_url(); ?>assets/<?php echo $this->config->item('themeCode'); ?>/images/star.jpg" alt=""></a>
                    <a href="#"><img src="<?php echo base_url(); ?>assets/<?php echo $this->config->item('themeCode'); ?>/images/star.jpg" alt=""></a>
                </span>
            </p>
            <table class="addresstab">
                <tr>
                    <td class="adddefault">
                        <p><strong>Address:</strong> <br />
                            2/102, Floor 2 <br />
                            Inorbit Mall, Nagar Road <br />
                            Viman Nagar, Pune- 411010
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><strong>Contact Number:</strong> <br />
                            Mr. K.P. Roy </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><strong>Contact Person:</strong> <br />
                            +91 12345 2345 <br /> 022 12345788</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><strong>Store Timings:</strong> <br />
                            9:00 AM to 6:00 PM<br /> Monday - Saturday</p>
                    </td>
                </tr>
                <tr>
                    <td class="emailsmsbox">
                        <a href="#" class="sendsms">Send on SMS</a>
                        <a href="#" class="sendsms1">Send on Email</a>
                    </td>
                </tr>
            </table>

        </div>
        <div class="trow row">
            <ul class="listorange">
                <li><a href="#">Offer available</a></li>
                <li><a href="#">Last 3 pieces left</a></li>
                <li><a href="#">12 Store Reviews</a></li>
            </ul>
        </div>
        <div class="frrow row">
            <span class="inrbox">
                INR 3,500
            </span>
            <div class="space10"></div>

            <div class="space10"></div>
            <table class="storebox">
                <tr>
                    <td>
                        <a href="#" class="btncomman rounded btnshadow">BUY NOW</a> <a href="#" class="btncomman rounded btnshadow">BARGAIN</a>
                    </td>
                </tr>
                <tr>
                    <td class="storeboxtd">
                        <label><input type="checkbox" /> Add to STORE COMPARE</label> 
                        <label><input type="checkbox" /> Add to STORE COMPARE</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="giftbox">
                            <a href="#">
                                <span><img src="<?php echo base_url(); ?>assets/<?php echo $this->config->item('themeCode'); ?>/images/cgift.png" alt="" /></span>
                                Offer <br /> Available
                            </a>
                            <a href="#">
                                <span><img src="<?php echo base_url(); ?>assets/<?php echo $this->config->item('themeCode'); ?>/images/ccar.png" alt="" /></span>
                                Parking <br /> Available
                            </a>
                            <a href="#">
                                <span><img src="<?php echo base_url(); ?>assets/<?php echo $this->config->item('themeCode'); ?>/images/ccard.png" alt="" /></span>
                                Credit/Debit <br /> Card Accepted
                            </a>
                            <a href="#">
                                <span><img src="<?php echo base_url(); ?>assets/<?php echo $this->config->item('themeCode'); ?>/images/crup.png" alt="" /></span>
                                Cash <br /> Accepted
                            </a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="space15"></div>