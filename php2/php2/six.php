<HTML>
	<BODY>
		<TABLE BORDER = 0 BGCOLOR = SILVER CELLPADDING = 10 ALIGN = "CENTER" CELLSPACING="8">
			<TR>
				<TH>Number</TH>
				<TH>Square</TH>
			</TR>
			<?php
			for($i=1; $i<=10; $i++) {
				$square = $i*$i;
				print "<TR BGCOLOR = \"WHITE\">
					<TD>$i</TD>
					<TD>$square</TD>
				</TR>";
			}
			?>
		</TABLE>
	</BODY>
</HTML>