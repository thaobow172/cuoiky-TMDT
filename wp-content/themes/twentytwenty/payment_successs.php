<?php
/**
 * Template name: WooCommerce - Payment Success
 *
 * This templates add Payment Success.
 *
 * @package Flatsome
 */


get_header();
do_action( 'flatsome_before_page' ); ?>
<div id="content" class="content-area page-wrapper" role="main">
	<div class="row row-main">
		<div class="large-12 col">
			<div class="col-inner">
                <div class="container">
                    <div class="header clearfix">
                        <h3 class="text-muted">KẾT QUẢ THANH TOÁN</h3>
                    </div>
                    <div class="table-responsive">
                        <div class="form-group">
                            <label >Mã đơn hàng: <?php echo $_GET['vnp_TxnRef'] ?></label>
                        </div>    
                        <div class="form-group">
        
                            <label >Số tiền: <?php echo $_GET['vnp_Amount'] ?></label>
                        </div>  
                        <div class="form-group">
                            <label >Mã phản hồi (vnp_ResponseCode): <?php echo $_GET['vnp_ResponseCode'] ?></label>
                        </div> 
                        <div class="form-group">
                            <label >Mã GD Tại VNPAY: <?php echo $_GET['vnp_TransactionNo'] ?></label>
                        </div> 
                        <div class="form-group">
                            <label >Mã Ngân hàng: <?php echo $_GET['vnp_BankCode'] ?></label>
                        </div> 
                        <div class="form-group">
                            <label >Thời gian thanh toán: <?php echo $_GET['vnp_PayDate'] ?></label>
                        </div> 
                        <div class="form-group">
                            <label >Kết quả:  <span style='color:green'><?php echo ($_GET['vnp_ResponseCode']== 00)?"THANH TOÁN THÀNH CÔNG - CỬA HÀNG THAOSHOP CẢM ƠN BẠN!":"THANH TOÁN THẤT BẠI"; ?></span>
                            </label>
                        </div> 
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>

<?php
do_action( 'flatsome_after_page' );
get_footer();


?>