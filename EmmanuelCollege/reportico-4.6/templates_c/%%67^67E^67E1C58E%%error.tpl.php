<?php /* Smarty version 2.6.26, created on 2017-09-04 09:06:24
         compiled from error.tpl */ ?>
<div class="swRepForm">
<?php if (strlen ( $this->_tpl_vars['ERRORMSG'] ) > 0): ?>
            <div style="display:none" id="reporticoEmbeddedError">
                <?php echo $this->_tpl_vars['ERRORMSG']; ?>

            </div>
<?php echo '
            <script>
                if ( typeof(reportico_jquery) != "undefined" )
                    reportico_jquery(document).ready(function()
                    {
                        showParentNoticeModal(reportico_jquery("#reporticoEmbeddedError").html());
                    });
                else
                    if ( typeof(parent.reportico_jquery) != "undefined" ) 
                        parent.reportico_jquery(document).ready(function()
                        {   
                            parent.showNoticeModal(document.getElementById("reporticoEmbeddedError").innerHTML);
                        });
            </script>
'; ?>

            <TABLE class="swError">
                <TR>
                    <TD><?php echo $this->_tpl_vars['ERRORMSG']; ?>
</TD>
                </TR>
            </TABLE>
<?php endif; ?>
<?php if (strlen ( $this->_tpl_vars['STATUSMSG'] ) > 0): ?> 
			<TABLE class="swStatus">
				<TR>
					<TD><?php echo $this->_tpl_vars['STATUSMSG']; ?>
</TD>
				</TR>
			</TABLE>
<?php endif; ?>
</div>