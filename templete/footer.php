<?php
/**
		* 하단 정보 화면 
		@package templates/common/footer.php
		@filesource
		@author SeungwanJo <wh7923@gmail.com>
		@copyright 2016 Unclab
		@version [ 1.0.0 ]
	**/
class Footer {
	public static function render(){
			echo '<footer id="footer">
                <div class="container">
                    <div class="col-md-8">
                        <p class="copyright">Copyright: <span>2016</span>&nbsp;UNClab &nbsp;&nbsp;&nbsp; &nbsp;Made by <strong><a href="mailto:wh7923@gmail.com">SeungwanJo</a></strong></p>
                    </div>
                    <div class="col-md-4">
                        <!-- Social Media -->
                        <ul class="social">
                            <li>
                                <a href="http://home.hongik.ac.kr" class="Facebook">
                                    <img src="images/hongikmark.jpg"><i>HongikUnv.</i>
                                </a>
                            </li>
                            <li>
                                <a href="http://cic.hongik.ac.kr" class="Twitter">
                                    <img src="images/cicmark.png"><i>CIC</i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer> 
						';
	}
}